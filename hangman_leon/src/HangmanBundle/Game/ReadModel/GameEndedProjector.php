<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 11-1-16
 * Time: 17:05
 */

namespace HangmanBundle\Game\ReadModel;


use Broadway\ReadModel\Projector;
use Broadway\ReadModel\RepositoryInterface;
use HangmanBundle\Game\Domain\Game\GameLost as GameLostEvent;
use HangmanBundle\Game\Domain\Game\GameWon as GameWonEvent;

class GameEndedProjector extends Projector
{
    /**
     * @var RepositoryInterface
     */
    private $repository;

    /**
     * GameEndProjector constructor.
     * @param RepositoryInterface $repositoryInterface
     */
    public function __construct(RepositoryInterface $repositoryInterface)
    {
        $this->repository = $repositoryInterface;
    }

    /**
     * @param GameWonEvent $event
     */
    public function applyGameWon(GameWonEvent $event)
    {
        $readModel = new GameEnd();
        $readModel->setGameId($event->getGameId());
        $readModel->getStatus(1);
        //$readModel->setTimeExpanned($event-)
        $this->repository->save($readModel);
    }

    /**
     * @param GameLostEvent $event
     */
    public function applyGameLost(GameLostEvent $event)
    {
        $readModel = new GameEnd();
        $readModel->setGameId($event->getGameId());
        $readModel->setStatus(0);

        $this->repository->save($readModel);
    }

}