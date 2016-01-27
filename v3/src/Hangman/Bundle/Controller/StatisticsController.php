<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 27-1-16
 * Time: 9:55
 */

namespace Hangman\Bundle\Controller;


use Broadway\CommandHandling\CommandBusInterface;
use Broadway\ReadModel\RepositoryInterface;
use Broadway\UuidGenerator\UuidGeneratorInterface;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Router;

class StatisticsController extends FOSRestController
{
    /**
     * @var CommandBusInterface
     */
    private $commandBus;

    /**
     * @var UuidGeneratorInterface
     */
    private  $uuidGenerator;

    /**
     * @var FormFactory
     */
    private $formFactory;

    /**
     * @var Router
     */
    private $router;

    /**
     * @var RepositoryInterface
     */
    private $readModelRepository;

    /**
     * StatisticsController constructor.
     * @param CommandBusInterface $commandBus
     * @param UuidGeneratorInterface $uuidGenerator
     * @param FormFactory $formFactory
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
     * @return JsonResponse
     */
    public function getOverviewAction()
    {
        $games = $this->readModelRepository->findAll();

        $json_resp = [];

        foreach($games as $game) {
            $json_resp[] = $game->exportToArray();
        }

        return new JsonResponse($json_resp);
    }

    /**
     * @param $uuid
     * @return JsonResponse
     */
    public function getGameDetailAction($uuid)
    {
        $game = $this->readModelRepository->find($uuid);

        return new JsonResponse($game);
    }
}