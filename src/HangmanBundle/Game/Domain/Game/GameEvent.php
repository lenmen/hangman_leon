<?php


namespace HangmanBundle\Game\Domain\Game;


abstract class GameEvent
{
    /**
     * @var string
     */
    private $gameId;

    /**
     * @param string $gameId
     */
    public function __construct($gameId) {
        $this->gameId = $gameId;
    }

    /**
     * @return string
     */
    public function getGameId()
    {
        return $this->gameId;
    }
}