<?php

namespace HangmanBundle\Game\Domain\Config;

use Doctrine\ORM\Mapping as ORM;

/**
 * ORM\Entity
 */
class GameStarted
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $gameId;

    /**
     * @var string
     */
    private $word;

    /**
     * GameStarted constructor.
     * @param string $word
     * @param string $gameId
     */
    public function __construct($word, $gameId)
    {
        $this->word = $word;
        $this->gameId = $gameId;
    }

    /**
     * @return string
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * @param string $gameId
     */
    public function setGameId($gameId)
    {
        $this->gameId = $gameId;
    }

    /**
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * @param string $word
     */
    public function setWord($word)
    {
        $this->word = $word;
    }
}