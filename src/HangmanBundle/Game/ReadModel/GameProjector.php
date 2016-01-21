<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 21-1-16
 * Time: 14:19
 */

namespace HangmanBundle\Game\ReadModel;


use Broadway\ReadModel\Projector;
use Broadway\ReadModel\RepositoryInterface;
use HangmanBundle\Game\Domain\Game\GameStarted as GameStartedEvent;
use HangmanBundle\Game\Domain\Game\LetterGuessedCorrectly;
use Assert\Assertion;

class GameProjector extends Projector
{
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
        $readModel = new Game($event->getGameId(), $event->getWord());
        $this->repository->save($readModel);
    }

    /**
     * @param LetterGuessedCorrectly $event
     */
    public function applyLetterGuessedCorrectly(LetterGuessedCorrectly $event)
    {
        $readModel = $this->repository->findBy(["gameId" => $event->getGameId()]);

        Assertion::notNull($readModel, "Readmodel doesn't hold an object");

        $lastResult = end($readModel);
        $readModel = $lastResult->setLetterCorrectlyGuessed($event->getLetters());

        $this->repository->save($readModel);
    }
}