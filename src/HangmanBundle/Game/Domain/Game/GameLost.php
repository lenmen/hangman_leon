<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 11-1-16
 * Time: 11:10
 */

namespace HangmanBundle\Game\Domain\Game;


use Symfony\Component\Validator\Constraints\Time;

class GameLost extends GameEvent
{
    /**
     * @var \DateTime
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