<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 22-1-16
 * Time: 12:05
 */

namespace Hangman\Bundle\Game\Domain\Game;


use Broadway\Domain\DateTime;

class GameLost
{
    /**
     * @var string
     */
    private $gameId;

    /**
     * @var DateTime
     */
    private $GameEndedAt;

    /**
     * GameLost constructor.
     * @param string $gameId
     */
    public function __construct($gameId)
    {
        $this->gameId = $gameId;
        $this->GameEndedAt = DateTime::now();
    }

    /**
     * @return string
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * @return DateTime
     */
    public function getGameEndedAt()
    {
        return $this->GameEndedAt;
    }


}