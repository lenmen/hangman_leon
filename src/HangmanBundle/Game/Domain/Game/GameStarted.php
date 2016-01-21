<?php


namespace HangmanBundle\Game\Domain\Game;

use Broadway\Domain\DateTime;


class GameStarted extends GameEvent
{
    /**
     * @var Word
     */
    private $word;

    /**
     * @var string
     */
    private $startTime;

    /**
     * @param string $gameId
     * @param string $word
     * @param string $datetime
     */
    public function __construct($gameId, $word, $datetime) {
        parent::__construct($gameId);

        $this->word = $word;
        $this->startTime = $datetime;
    }

    /**
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
}