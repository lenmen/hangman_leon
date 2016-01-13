<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 11-1-16
 * Time: 16:37
 */

namespace HangmanBundle\Game\ReadModel;


use Broadway\ReadModel\Projector;
use Broadway\ReadModel\RepositoryInterface;
use HangmanBundle\Game\Domain\Game\GameStarted as GameStartedEvent;

class GameStartedProjector extends Projector
{
    /**
     * @var RepositoryInterface
     */
    private $repository;

    /**
     * gameStartedProjector constructor.
     * @param RepositoryInterface $repositoryInterface
     */
    public function __construct(RepositoryInterface $repositoryInterface)
    {
        $this->repository = $repositoryInterface;
    }

    /**
     * @param GameStartedEvent $event
     */
    public function applyGameStarted(GameStartedEvent $event)
    {
        $readModel = new GameStarted($event->getGameId(), $event->getWord(), $event->getStartTime());
        $this->repository->save($readModel);
    }
}