<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 22-1-16
 * Time: 13:10
 */

namespace Hangman\Bundle\Game\Domain\Game;


class LetterCorrectlyChosen
{
    /**
     * @var string
     */
    private $gameId;

    /**
     * @var array
     */
    private $letters;

    /**
     * LetterCorrectlyChosen constructor.
     * @param string $gameId
     * @param array $letters
     */
    public function __construct($gameId, Array $letters)
    {
        $this->gameId = $gameId;
        $this->letters = $letters;
    }

    /**
     * @return string
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * @return array
     */
    public function getLetters()
    {
        return $this->letters;
    }
}