<?php

namespace HangmanBundle\Controller;

use Broadway\CommandHandling\CommandBusInterface;
use Broadway\UuidGenerator\UuidGeneratorInterface;
use Broadway\ReadModel\RepositoryInterface;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\View\View;

use HangmanBundle\Form\GameStartType;
use HangmanBundle\Game\Application\Command\GameStartCommand;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Form;
use Symfony\Bundle\FrameworkBundle\Routing\Router;

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
    ) {
        $this->commandBus          = $commandBus;
        $this->uuidGenerator       = $uuidGenerator;
        $this->formFactory         = $formFactory;
        $this->router              = $router;
        $this->readModelRepository = $readModelRepository;
    }

    public function indexAction()
    {
        return $this->render('HangmanBundle:Default:index.html.twig');
    }

    public function getGameAction(Request $request, $id)
    {
        //get game
        return "hello game";
    }

    public function postGameAction(Request $request)
    {
        $uuid = $this->uuidGenerator->generate();
        $gameRequest = $request->request->get("game");
        $gameStartCommand = new GameStartCommand($uuid, $gameRequest["word"]);
        $form = $this->formFactory->create(new GameStartType(), $gameStartCommand);
            
        //return var_dump($gameStartCommand->getWord());
        $handle = $this->handleForm($request, $form, $uuid, $gameStartCommand);

        //return json_encode($request->request->get("word"));
        return var_dump($handle);
    }

    private function handleForm(Request $request, Form $form, $id, $command)
    {
        $form->submit($request);
        
        if ($form->isValid()) {
            $this->handleCommand($command);

            return $this->redirectView(
                $this->router->generate(
                    'get_game',
                    array('id' => $id)
                ),
                Codes::HTTP_CREATED
            );
        }
        
        //var_dump($request);
        
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
            throw new \Exception("Municipality config could not be found or created");
        }
    }
}
