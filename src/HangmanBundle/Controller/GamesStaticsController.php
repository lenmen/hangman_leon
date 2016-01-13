<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 13-1-16
 * Time: 11:04
 */

namespace HangmanBundle\Controller;

use Broadway\CommandHandling\CommandBusInterface;
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
use HangmanBundle\Game\ReadModel\GameStatics;
use Symfony\Component\Form\Exception\RuntimeException;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Form;
use Symfony\Bundle\FrameworkBundle\Routing\Router;

class GamesStaticsController extends FOSRestController
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
    private $router;

    /**
     * @var RepositoryInterface
     */
    private $readModelRepository;

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
        RepositoryInterface $readModelRepository
    )
    {
        $this->commandBus = $commandBus;
        $this->uuidGenerator = $uuidGenerator;
        $this->formFactory = $formFactory;
        $this->router = $router;
        $this->readModelRepository = $readModelRepository;
    }


    public function getStaticGamesAction() {
        $readModel = $this->readModelRepository->findAll();

        if (count($readModel) < 1) {
            throw new RuntimeException("No Games found");
        }

        $data = [];

        foreach($readModel as $model) {
            $tmp = [];
            $tmp["id"] = $model->getId();
            $tmp["gameStatus"] = $model->getGameStatus();
            $tmp["gameStartTime"] = $model->getGameStartTime();
            $tmp["gameEndTime"] = $model->getGameEndTime();

            $data[] = $tmp;
        }

        var_dump($data);
    }
}