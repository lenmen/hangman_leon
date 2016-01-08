<?php


namespace HangmanBundle\Game\Domain\Game;


use Broadway\EventSourcing\EventSourcedAggregateRoot;

class Game extends EventSourcedAggregateRoot
{
    /**
     * @var string
     */
    private $gameId;

    /**
     * @var string
     */
    private $word;
    /**
     * @return string
     */
    public function getAggregateRootId()
    {
        return $this->gameId;
    }

    public static function createGame($gameId, $word)
    {
        $game = new Game();
        $game->apply(new GameStarted($gameId, $word));
        return $game;
    }

    public function applyGameStarted(GameStarted $event)
    {
        $this->gameId = $event->getGameId();
        $this->word = $event->getWord();
    }

}