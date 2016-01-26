<?php
/**
 * Created by PhpStorm.
 * User: lennardmoll
 * Date: 21/01/16
 * Time: 22:27
 */

namespace Hangman\Bundle\Game\Application;


use Broadway\CommandHandling\CommandHandler;
use Hangman\Bundle\Game\Application\Commands\ChooseLetter;
use Hangman\Bundle\Game\Domain\Game\Game;
use Hangman\Bundle\Game\Domain\Game\GameRepository;
use Hangman\Bundle\Game\Application\Commands\StartGame;

class GameCommandHandler extends CommandHandler
{
    /**ve
     * @var GameRepository
     */
    private $repository;

    /**
     * GameCommandHandler constructor.
     * @param GameRepository $repository
     */
    public function __construct(GameRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param StartGame $command
     */
    public function handleStartGame(StartGame $command)
    {
        $gameStart = Game::startGame($command->getGameId(), $command->getWord());
        $this->repository->save($gameStart);
    }

    public function handleChooseLetter(ChooseLetter $command)
    {
        $game = $this->repository->load($command->getGameId());
        $game->chooseLetter($command->getLetter());
        $this->repository->save($game);
    }
}