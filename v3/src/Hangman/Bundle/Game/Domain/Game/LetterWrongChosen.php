<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 22-1-16
 * Time: 12:00
 */

namespace Hangman\Bundle\Game\Domain\Game;


class LetterWrongChosen
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
     * LetterWrongChosen constructor.
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


}