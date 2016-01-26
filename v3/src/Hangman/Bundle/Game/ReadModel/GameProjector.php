<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 18-1-16
 * Time: 13:40
 */

namespace Hangman\Bundle\Game\ReadModel;


use Broadway\ReadModel\Projector;
use Broadway\ReadModel\RepositoryInterface;

use Hangman\Bundle\Game\Domain\Game\GameLost;
use Hangman\Bundle\Game\Domain\Game\GameStarted as GameStartedEvent;
use Hangman\Bundle\Game\Domain\Game\GameWon;
use Hangman\Bundle\Game\Domain\Game\LetterCorrectlyChosen;
use Hangman\Bundle\Game\Domain\Game\LetterWrongChosen;
use Assert\Assertion;

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
    public function applyLetterCorrectlyChosen(LetterCorrectlyChosen $event)
    {
        $readModel = $this->repository->find($event->getGameId());

        Assertion::notNull($readModel, "Readmodel doesn't hold an object");

        $readModel = $readModel->setLetterCorrectlyGuessed($event->getLetters());

        $this->repository->save($readModel);
    }

    /**
     * @param WrongLetterGuessed $event
     */
    public function applyLetterWrongChosen(LetterWrongChosen $event)
    {
        $readModel = $this->repository->find($event->getGameId());
        $readModel = $readModel->setLetterWrongGuessed($event->getLetter());
        $this->repository->save($readModel);
    }

    /**
     * @param GameWon $event
     */
    public function applyGameWon(GameWon $event)
    {
        $readModel = $this->repository->find($event->getGameId());
        $readModel->setGameStatus("Game won!");
        $readModel->setGameWon();
        $this->repository->save($readModel);
    }

    /**
     * @param GameLost $event
     */
    public function applyGameLost(GameLost $event)
    {
        $readModel = $this->repository->find($event->getGameId());
        $readModel->setGameStatus("Game lost!");
        $readModel->setGameLost();
        $this->repository->save($readModel);
    }
}