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

}