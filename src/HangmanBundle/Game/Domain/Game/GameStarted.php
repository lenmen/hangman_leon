<?php


namespace HangmanBundle\Game\Domain\Game;


class GameStarted extends GameEvent
{
    /**
     * @var string
     */
    private $word;

    /**
     * @var \DateTime
     */
    private $startTime;

    /**
     * @param string $gameId
     * @param string $word
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