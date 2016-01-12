<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 11-1-16
 * Time: 17:01
 */

namespace HangmanBundle\Game\ReadModel;


use Broadway\ReadModel\Projector;
use Broadway\ReadModel\RepositoryInterface;
use HangmanBundle\Game\Domain\Game\LetterGuessedCorrectly;
use HangmanBundle\Game\Domain\Game\WrongLetterGuessed;

class LetterChosenProjector extends Projector
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
     * @param LetterGuessedCorrectly $event
     */
    public function applyLetterGuessedCorrectly(LetterGuessedCorrectly $event)
    {
        $readModel = new LetterChosen();
        $readModel->setGameId($event->getGameId());
        $readModel->setLetter($event->getLetters());
        $readModel->setCorrectGuessed(true);

        $this->repository->save($readModel);
    }

    /**
     * @param WrongLetterGuessed $event
     */
    public function applyWrongLetterGuessed(WrongLetterGuessed $event)
    {
        $readModel = new LetterChosen();
        $readModel->setGameId($event->getGameId());
        $readModel->setLetter($event->getLetter());
        $readModel->setMisGuessed(true);

        $this->repository->save($readModel);
    }
}