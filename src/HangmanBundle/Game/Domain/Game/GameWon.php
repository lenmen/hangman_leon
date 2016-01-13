<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 11-1-16
 * Time: 11:09
 */

namespace HangmanBundle\Game\Domain\Game;


class GameWon extends GameEvent
{
    /**
     * @var Time
     */
    private $expandedTimeOnGame;

    /**
     * GameLost constructor.
     * @param string $gameId
     * @param \DateTime $time
     */
    public function __construct($gameId, $time)
    {
        parent::__construct($gameId);

        $this->expandedTimeOnGame = $time;
    }

    /**
     * @return \DateTime
     */
    public function getExpandedTimeOnGame()
    {
        return $this->expandedTimeOnGame;
    }
}