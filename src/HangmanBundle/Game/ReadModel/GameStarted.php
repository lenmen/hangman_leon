<?php


namespace HangmanBundle\Game\ReadModel;


use Broadway\ReadModel\ReadModelInterface;

/**
 * Class GameStarted
 * @package HangmanBundle\Game\ReadModel
 *
 * @uses ReadModelInterface
 */
class GameStarted implements ReadModelInterface
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
     * @var \DateTime
     */
    private $gameStartTime;

    /**
     * @param string $gameId
     * @param string $word
     */
    public function __construct($gameId, $word, $gameStartTime)
    {
        $this->gameId = $gameId;
        $this->word   = $word;
        $this->gameStartTime = $gameStartTime;
    }

    public function dbId()
    {
        return $this->id;
    }

    public function getId()
    {
        return $this->gameId;
    }

    public function getWord()
    {
        return $this->word;
    }

    /**
     * Set gameId
     *
     * @param string $gameId
     *
     * @return GameStarted
     */
    public function setGameId($gameId)
    {
        $this->gameId = $gameId;

        return $this;
    }

    /**
     * Get gameId
     *
     * @return string
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * Set word
     *
     * @param string $word
     *
     * @return GameStarted
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }


    /**
     * Set gameStartTime
     *
     * @param \DateTime $gameStartTime
     *
     * @return GameStarted
     */
    public function setGameStartTime($gameStartTime)
    {
        $this->gameStartTime = $gameStartTime;

        return $this;
    }

    /**
     * Get gameStartTime
     *
     * @return \DateTime
     */
    public function getGameStartTime()
    {
        return $this->gameStartTime;
    }
}
