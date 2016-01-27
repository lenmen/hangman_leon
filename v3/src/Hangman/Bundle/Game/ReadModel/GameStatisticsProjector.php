<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 26-1-16
 * Time: 16:51
 */

namespace Hangman\Bundle\Game\ReadModel;

use Broadway\ReadModel\Projector;
use Broadway\ReadModel\RepositoryInterface;
use Hangman\Bundle\Game\Domain\Game\GameStarted;
use Hangman\Bundle\Game\Domain\Game\LetterCorrectlyChosen;
use Hangman\Bundle\Game\Domain\Game\LetterWrongChosen;
use Hangman\Bundle\Game\Domain\Game\GameWon;
use Hangman\Bundle\Game\Domain\Game\GameLost;

class GameStatisticsProjector extends Projector
{
    /**
     * @var RepositoryInterface
     */
    private $repository;

    /**
     * GameStatisticsProjector constructor.
     * @param RepositoryInterface $repository
     */
    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param GameStarted $event
     */
    public function applyGameStarted(GameStarted $event)
    {
        $readModel = new GameStatistics($event->getGameId(), $event->getWord(), $event->getGameStartedAt()->toString());
        $this->repository->save($readModel);
    }

    /**
     * @param LetterCorrectlyChosen $event
     */
    public function applyLetterCorrectlyChosen(LetterCorrectlyChosen $event)
    {
        $readModel = $this->repository->find($event->getGameId());
        $readModel->setCorrectGuessedLetters($event->getLetters());
        $this->repository->save($readModel);
    }

    /**
     * @param LetterWrongChosen $event
     */
    public function applyLetterWrongChosen(LetterWrongChosen $event)
    {
        $readModel = $this->repository->find($event->getGameId());
        $readModel = $readModel->setWrongGuessedLetters($event->getLetter());
        $this->repository->save($readModel);
    }


    /**
     * @param GameWon $event
     */
    public function applyGameWon(GameWon $event)
    {
        $readModel = $this->repository->find($event->getGameId());
        $readModel->setStatus("Game won!");
        $readModel->setGameWon();
        $this->repository->save($readModel);
    }

    /**
     * @param GameLost $event
     */
    public function applyGameLost(GameLost $event)
    {
        $readModel = $this->repository->find($event->getGameId());
        $readModel->setStatus("Game lost!");
        $readModel->setGameLost();
        $this->repository->save($readModel);
    }
}