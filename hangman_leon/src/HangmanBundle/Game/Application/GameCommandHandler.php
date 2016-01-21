<?php
namespace HangmanBundle\Game\Application;

use Broadway\CommandHandling\CommandHandler;
use HangmanBundle\Game\Application\Command\ChooseLetter;
use HangmanBundle\Game\Application\Command\GameStart;

use HangmanBundle\Game\Domain\Game\Game;
use HangmanBundle\Game\Domain\Game\GameRepository;

class GameCommandHandler extends CommandHandler
{
    /**
     * @var GameRepository
     */
    private $repository;

    /**
     * @param GameRepository $gameRespository
     */
    public function __construct(GameRepository $gameRespository)
    {
        $this->repository = $gameRespository;
    }

    /**
     * @param GameStart $command
     */
    public function handleGameStart(GameStart $command)
    {
        $game = Game::gameStart($command->getGameId(), $command->getWord());
        $this->repository->save($game);
    }

    /**
     * @param ChooseLetter $command
     */
    public function handleChooseLetter(ChooseLetter $command)
    {
        /** @var Game $game */
        $game = $this->repository->load($command->getGameId());
        $game->chooseLetter($command->getGameId(), $command->getLetter());
        $this->repository->save($game);
    }
}