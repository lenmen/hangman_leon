<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 11-1-16
 * Time: 11:20
 */

namespace HangmanBundle\Game\Application\Command;


class ChooseLetter
{
    /**
     * @var string
     */
    private $gameId;

    /**
     * @var string
     */
    private $letter;

    /**
     * ChooseLetter constructor.
     * @param string $gameId
     * @param string $letter
     */
    public function __construct($gameId, $letter)
    {
        $this->gameId = $gameId;
        $this->letter = $letter;
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
    public function getLetter()
    {
        return $this->letter;
    }

    /**
     * @param string $letter
     */
    public function setLetter($letter)
    {
        $this->letter = $letter;
    }
}