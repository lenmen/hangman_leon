<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 11-1-16
 * Time: 11:05
 */

namespace HangmanBundle\Game\Domain\Game;


class LetterGuessedCorrectly extends GameEvent
{
    /**
     * @var array
     */
    private $letters;

    /**
     * LetterGuessedCorrectly constructor
     * @param string $gameId.
     * @param array $letters
     */
    public function __construct($gameId, $letters)
    {
        parent::__construct($gameId);

        $this->letters[] = $letters;
    }

    /**
     * @return mixed
     */
    public function getLetters()
    {
        return $this->letters;
    }
}