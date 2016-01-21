<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 18-1-16
 * Time: 13:40
 */

namespace HangmanBundle\Game\ReadModel;


use Broadway\ReadModel\Projector;
use Broadway\ReadModel\RepositoryInterface;

use HangmanBundle\Game\Domain\Game\GameLost;
use HangmanBundle\Game\Domain\Game\GameStarted as GameStartedEvent;
use HangmanBundle\Game\Domain\Game\GameWon;
use HangmanBundle\Game\Domain\Game\LetterGuessedCorrectly;
use HangmanBundle\Game\Domain\Game\WrongLetterGuessed;

class GameProjector extends Projector
{
    /**
     * @var RepositoryInterface
     */
    private $repository;

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

    /**
     * @param WrongLetterGuessed $event
     */
    public function applyWrongLetterGuessed(WrongLetterGuessed $event)
    {
        $readModel = $this->repository->findBy(["gameId" => $event->getGameId()]);
        $lastResult = end($readModel);
        $readModel = $lastResult->setLetterWrongGuessed($event->getLetter());
        $this->repository->save($readModel);
    }

    public function applyGameWon(GameWon $event)
    {
        $readModel = $this->repository->find($event->getGameId());
        $readModel->setStatus("Game won!");
        $this->repository->save($readModel);
    }

    public function applyGameLost(GameLost $event)
    {
        $readModel = $this->repository->find($event->getGameId());
        $readModel->setStatus("Game lost!");
        $this->repository->save($readModel);
    }
}