<?php
namespace HangmanBundle\Game\Application;

use Broadway\CommandHandling\CommandHandler;
use HangmanBundle\Game\Application\Command\GameStartCommand;

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

    public function handleGameStart(GameStartCommand $command)
    {
        $game = Game::createGame($command->getGameId(), $command->getWord());
        $this->repository->save($game);
    }
}