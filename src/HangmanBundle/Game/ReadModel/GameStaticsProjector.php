<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 13-1-16
 * Time: 11:38
 */

namespace HangmanBundle\Game\ReadModel;


use Assert\Assertion;
use Broadway\ReadModel\Projector;
use Broadway\ReadModel\RepositoryInterface;
use HangmanBundle\Game\Domain\Game\GameLost;
use HangmanBundle\Game\Domain\Game\GameStarted as GameStartedEvent;
use HangmanBundle\Game\Domain\Game\GameWon;
use HangmanBundle\Game\Domain\Game\LetterGuessedCorrectly;
use HangmanBundle\Game\Domain\Game\WrongLetterGuessed;
use Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException;


class GameStaticsProjector extends Projector
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
        $readModel = new GameStatics($event->getGameId(), $event->getWord(), $event->getStartTime());
        $this->repository->save($readModel);

        var_dump($readModel);
    }

    /**
     * @param LetterGuessedCorrectly $event
     */
    public function applyLetterGuessedCorrectly(LetterGuessedCorrectly $event)
    {
        $readModel = $this->repository->find($event->getGameId());

        Assertion::notNull($readModel, "Readmodel doesn't hold an object");

        $readModel = $readModel->setLetterCorrectlyGuessed($event->getLetters());

        $this->repository->save($readModel);
    }

    /**
     * @param WrongLetterGuessed $event
     */
    public function applyWrongLetterGuessed(WrongLetterGuessed $event)
    {
        $readModel = $this->repository->find($event->getGameId());
        $readModel->setLetterWrongGuessed($event->getLetter());
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
        $readModel->setGameEndTime($event->getExpandedTimeOnGame());
        $this->repository->save($readModel);
    }
}