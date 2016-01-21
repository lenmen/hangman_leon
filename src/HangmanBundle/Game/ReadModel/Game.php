<?php

namespace HangmanBundle\Game\ReadModel;
use Broadway\ReadModel\ReadModelInterface;
use HangmanBundle\Models\LetterSaver;
use HangmanBundle\Models\WordChecker;

/**
 * Game
 */
class Game implements ReadModelInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $gameId;

    /**
     * @var WordChecker
     */
    private $word;

    /**
     * @var string
     */
    private $gameStatus;

    /**
     * @var LetterSaver
     */
    private $letterCorrectlyGuessed;

    /**
     * @var LetterSaver
     */
    private $letterWrongGuessed;

    private $gameWon = false;

    private $gameLost = false;


    public function __construct($gameId, $word)
    {
        $this->letterCorrectlyGuessed = new LetterSaver();
        $this->letterWrongGuessed = new LetterSaver();
        $this->gameId = $gameId;
        $this->gameStatus = "in progress";
        $this->word = new WordChecker($word);
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set gameId
     *
     * @param string $gameId
     *
     * @return Game
     */
    public function setGameId($gameId)
    {
        $this->gameId = $gameId;

        return $this;
    }

    /**
     * Get gameId
     *
     * @return string
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * Get word
     *
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * @param LetterSaver $word
     */
    public function initLetterCorrectlyGuessed(LetterSaver $letterSaver) {
        $this->letterGuessedCorrectly = $letterSaver;
    }

    /**
     * Set letterWrongGuessed
     *
     * @param string $letterWrongGuessed
     *
     * @return GameStatics
     */
    public function setLetterWrongGuessed($letterWrongGuessed)
    {
        $this->letterWrongGuessed->addLetterToContainer($letterWrongGuessed);

        return $this;
    }

    /**
     * Get letterWrongGuessed
     *
     * @return string
     */
    public function getLetterWrongGuessed()
    {
        return $this->letterWrongGuessed;
    }

    /**
     * Set letterCorrectlyGuessed
     *
     * @param string $letterCorrectlyGuessed
     *
     * @return GameStatics
     */
    public function setLetterCorrectlyGuessed($letterCorrectlyGuessed)
    {
        $this->letterGuessedCorrectly->addLetterToContainer($this->letterGuessedCorrectly);
       // $this->letterGuessedCorrectly->addLetterToContainer($letterCorrectlyGuessed);

        return $this;
    }

    /**
     * Get letterCorrectlyGuessed
     *
     * @return string
     */
    public function getLetterCorrectlyGuessed()
    {
        return $this->letterGuessedCorrectly;
    }

    /**
     * Set gameStatus
     *
     * @param string $gameStatus
     *
     * @return GameStatics
     */
    public function setGameStatus($gameStatus)
    {
        $this->gameStatus = $gameStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getGameStatus()
    {
        return $this->gameStatus;
    }

    /**
     * @return bool
     */
    public function getGameWon()
    {
        return $this->gameWon;
    }

    public function setGameWon()
    {
        $this->gameWon = true;
    }

    /**
     * @return bool
     */
    public function getGameLost()
    {
        return $this->gameWon;
    }

    public function setGameLost()
    {
        $this->gameLost = true;
    }
}
