<?php

namespace Hangman\Bundle\Controller;

use Assert\Assertion;
use Broadway\CommandHandling\CommandBusInterface;
use Broadway\ReadModel\RepositoryInterface;
use Broadway\UuidGenerator\UuidGeneratorInterface;
use FOS\RestBundle\Controller\FOSRestController;
use Hangman\Bundle\Game\Application\Commands\ChooseLetter;
use Hangman\Bundle\Game\Application\Commands\StartGame;
use Hangman\Bundle\Services\WordGetter;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GameController extends FOSRestController
{
    /**
     * @var CommandBusInterface
     */
    private $commandBus;

    /**
     * @var UuidGeneratorInterface
     */
    private $uuidGenerator;

    /**
     * @var FormFactory
     */
    private $formFactory;

    /**
     * @var Router
     */
    private  $router;

    /**
     * @var RepositoryInterface
     */
    private $readModelRepository;

    /**
     * GameController constructor.
     * @param CommandBusInterface $commandBus
     * @param UuidGeneratorInterface $uuidGenerator
     * @param FormFactory $formFactory\
     * @param Router $router
     * @param RepositoryInterface $readModelRepository
     */
    public function __construct(
        CommandBusInterface $commandBus,
        UuidGeneratorInterface $uuidGenerator,
        FormFactory $formFactory,
        Router $router,
        RepositoryInterface $readModelRepository
    ) {
        $this->commandBus = $commandBus;
        $this->uuidGenerator = $uuidGenerator;
        $this->formFactory = $formFactory;
        $this->router = $router;
        $this->readModelRepository = $readModelRepository;
    }

    /**
     * @param string $uuid
     */
    public function getGameDetailAction($uuid) {
        Assertion::uuid($uuid);
        $game = $this->readModelRepository->find($uuid);

        return new JsonResponse($game, 200);
    }


    /**
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function postStartGameAction(Request $request)
    {
        // Generate a uuid
        $uuid = $this->uuidGenerator->generate();

        $wordInstance = new WordGetter();
        $word = $wordInstance->getWord();

        // Start the game
        $startCommand = new StartGame($uuid, $word);
        $this->handleCommand($startCommand);

        $response = [
            "statusCode" => 0,
            "uuid" => $uuid,
            "message" => "Game created"
        ];

        return new JsonResponse($response, 200);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function postLetterAction(Request $request)
    {
        $uuid = $request->get("uuid");
        $letter = $request->get("letter");

        // get the game
        $chooseLetterCommand = new ChooseLetter($uuid, $letter);
        $this->handleCommand($chooseLetterCommand);

        $response = [
            "statusCode" => 0,
            "message" => "Letter uploaded"
        ];

        return new JsonResponse($response, 200);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function getLetterSubmittedAction($uuid)
    {
        $game = $this->readModelRepository->find($uuid);

        if (!$game) {
            throw new NotFoundHttpException("No game found");
        }

        $response = [
            "uuid" => $game->getGameId(),
            "good_guesses" => $game->getLetterCorrectlyGuessed(),
            "wrong_guesses" => $game->getLetterWrongGuessed(),
            "message" => $game->getGameStatus()
        ];

        if ($game->getGameWon()) {
            $response = [
                "uuid" => $game->getGameId(),
                "statusCode" => 1,
                "message" => $game->getGameStatus()
            ];
        }
        else if ($game->getGameLost()) {
            $response = [
                "uuid" => $game->getGameId(),
                "statusCode" => 2,
                "message" => $game->getGameStatus()
            ];
        }

        return new JsonResponse($response, 200);
    }

    /**
     * @param string $uuid
     * @return JsonResponse
     */
    public function postWordlengthAction(Request $request)
    {
        $uuid = $request->get("uuid");

        $game = $this->readModelRepository->find($uuid);

        if (!$game) {
            throw new NotFoundHttpException("No game found");
        }

        return new JsonResponse([
            "statusCode" => 0,
            "wordLength" => strlen($game->getWord())
            ],
            200
        );

    }

    /**
     * @param $uuid
     * @return JsonResponse
     */
    public function getGameStateAction($uuid)
    {
        Assertion::uuid($uuid);

        $game = $this->readModelRepository->find($uuid);

        return new JsonResponse([
                "uuid" => $uuid,
                "message" => $game->getGameStatus()
        ]);
    }

    /**
     * @param $command
     * @throws \Exception
     */
    private function handleCommand($command)
    {
        try {
            $this->commandBus->dispatch($command);
        } catch(\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
