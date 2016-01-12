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
     * @param string $gameId
     * @param string $word
     */
    public function __construct($gameId, $word)
    {
        $this->gameId = $gameId;
        $this->word   = $word;
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
}
