<?php

namespace HangmanBundle\Controller;

use Bazinga\Bundle\FakerBundle\DependencyInjection\BazingaFakerExtension;
use Broadway\CommandHandling\CommandBusInterface;
use Broadway\ReadModel\ReadModelInterface;
use Broadway\UuidGenerator\UuidGeneratorInterface;
use Broadway\ReadModel\RepositoryInterface;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\View\View;

use HangmanBundle\Form\ChooseLetterType;
use HangmanBundle\Form\GameStartType;
use HangmanBundle\Game\Application\Command\ChooseLetter;
use HangmanBundle\Game\Application\Command\GameStart;
use HangmanBundle\Services\MessagesService;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Form;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Class DefaultController
 * @package HangmanBundle\Controller
 * @uses FOSRestController
 */
class DefaultController extends FOSRestController
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
     * @var RepositoryInterface
     */
    private $readModelRepository;

    /**
     * @var Router
     */
    private $router;

    /**
     * @param CommandBusInterface    $commandBus
     * @param UuidGeneratorInterface $uuidGenerator
     * @param FormFactory            $formFactory
     * @param Router                 $router
     * @param RepositoryInterface    $readModelRepository
     */
    public function __construct(
        CommandBusInterface $commandBus,
        UuidGeneratorInterface $uuidGenerator,
        FormFactory $formFactory,
        Router $router,
        RepositoryInterface $readModelInterface
    ) {
        $this->commandBus          = $commandBus;
        $this->uuidGenerator       = $uuidGenerator;
        $this->formFactory         = $formFactory;
        $this->router              = $router;
        $this->readModelRepository = $readModelInterface;
    }

    public function getGameMenuAction()
    {
        return "hello world";
    }

    /**
     * @param Request $request
     * @param int $id
     * @return array
     */
    public function getGameAction(Request $request, $id = 0)
    {
        // Checks if the game exists
        $game = $this->readModelRepository->find($id);

        if (is_null($game)) {
            $status = [
                "statusCode" => 1,
                "statusMessage" => "game not found"
            ];

            return new JsonResponse($status, 201, array('Access-Control-Allow-Origin' => '*'));
        }

        $status = [
            "statusCode" => 0,
            "statusMessage" => "game found"
        ];

        return new JsonResponse($status, 201, array('Access-Control-Allow-Origin' => '*'));
    }


    public function getGameWonAction($id)
    {
        $game = $this->readModelRepository->find($id);

        if (is_null($game)) {
            return $this->redirectToRoute("get_game", ["id" => $id]);
        }
    }
    /**
     * @param Request $request
     * @return View|Form
     */
    public function postGameAction(Request $request)
    {
        $uuid = $this->uuidGenerator->generate();

        // Fake the word
        $faker = \Faker\Factory::create();

        $gameStartCommand = new GameStart($uuid, strtolower($faker->name), new \DateTime("now"));
        $this->handleCommand($gameStartCommand);

        $id = $this->getIdOfGame($uuid);

        $response = [
            "statusCode" => 0,
            "id" => $id,
            "message" => "Game created"
        ];

        return new JsonResponse($response, 201, array('Access-Control-Allow-Origin' => '*'));
    }

    /**
     * @param string $uuid
     * @return string
     */
    private function getIdOfGame($uuid)
    {
        $game = $this->readModelRepository->findBy(["gameId" => $uuid]);

        if (count($game) < 1 ) {
            throw new NotFoundHttpException("item not found");
        }

        return $game[0]->getId();
    }

    /**
     * @param Request $request
     * @return View|Form
     */
    public function postLetterAction(Request $request)
    {
        // get the values of the request
        $gameRequest = $request->request->get("letter");
        $gameId = $gameRequest["gameId"];

        $chooseLetterCommand = new ChooseLetter($gameId, $gameRequest["letter"]);
        $form = $this->formFactory->create(new ChooseLetterType(), $chooseLetterCommand);

        return $this->handleForm($request, $form, $gameId, $chooseLetterCommand);
    }

    /**
     * @param Request $request
     * @param Form $form
     * @param string $id
     * @param HangmanBundle\Game\Application\Command $command
     * @return View|Form
     * @throws \Exception
     */
    private function handleForm(Request $request, Form $form, $id, $command)
    {
        $form->submit($request);
        
        if ($form->isValid()) {

            $this->handleCommand($command);

            return true;
        }
        
        return $form;
    }

    /**
     * @param $command
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
