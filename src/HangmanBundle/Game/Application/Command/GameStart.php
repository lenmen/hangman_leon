<?php


namespace HangmanBundle\Game\Application\Command;


class GameStart
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
     * GameStartCommand constructor.
     * @param string $gameId
     * @param string $word
     */
    public function __construct($gameId, $word)
    {
        $this->gameId = $gameId;
        $this->word = $word;
    }

    /**
     * @return string
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }

    public function setWord($word) {
        $this->word = $word;
    }
}