<?php
/**
 * Created by PhpStorm.
 * User: lennardmoll
 * Date: 21/01/16
 * Time: 22:39
 */

namespace Hangman\Bundle\Game\Domain\Game;


use Broadway\Domain\DateTime;

class GameStarted
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
     * @var DateTime
     */
    private $gameStartedAt;

    /**
     * GameStarted constructor.
     * @param string $gameId
     * @param string $word
     */
    public function __construct($gameId, $word)
    {
        $this->gameId = $gameId;
        $this->word = $word;
        $this->gameStartedAt = DateTime::now();
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

    /**
     * @return DateTime
     */
    public function getGameStartedAt()
    {
        return $this->gameStartedAt;
    }


}