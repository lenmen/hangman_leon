<?php


namespace HangmanBundle\Game\Domain\Game;


class GameStarted extends GameEvent
{
    /**
     * @var string
     */
    private $word;

    /**
     * @param string $gameId
     * @param string $word
     */
    public function __construct($gameId, $word) {
        parent::__construct($gameId);

        $this->word = $word;
    }

    /**
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }
}