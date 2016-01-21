<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 11-1-16
 * Time: 11:08
 */

namespace HangmanBundle\Game\Domain\Game;


class WrongLetterGuessed extends GameEvent
{
    /**
     * @var string
     */
    private $letter;

    /**
     * WrongLetterGuessed constructor.
     * @param string $gameId
     * @param string $letter
     */
    public function __construct($gameId, $letter)
    {
        parent::__construct($gameId);

        $this->letter = $letter;
    }

    /**
     * @return string
     */
    public function getLetter()
    {
        return $this->letter;
    }


}