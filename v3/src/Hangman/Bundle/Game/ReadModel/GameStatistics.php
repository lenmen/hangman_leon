<?php

namespace Hangman\Bundle\Game\ReadModel;
use Broadway\Domain\DateTime;
use Broadway\ReadModel\ReadModelInterface;

/**
 * GameStatistics
 */
class GameStatistics implements ReadModelInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string:
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
     * @var boolean
     */
    private $gameWon = false;

    /**
     * @var boolean
     */
    private $gameLost = false;

    /**
     * @var boolean
     */
    private $gameEnded = false;

    /**
     * @var DateTime
     */
    private $gameEndedOn;

    /**
     * @var array
     */
    private $correctGuessedLetters = [];

    /**
     * @var array
     */
    private $wrongGuessedLetters = [];

    /**
     * @var string
     */
    private $status;

    /**
     * GameStatistics constructor.
     * @param string $gameId
     * @param string $word
     * @param DateTime $startedDate
     */
    public function __construct($gameId, $word, $startedDate)
    {
        $this->gameId = $gameId;
        $this->word = $word;
        $this->gameStartedAt = $startedDate;
        $this->status = "Game is in progress";
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
     * Get gameId
     *
     * @return \string:
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
     * Get gameStarted
     *
     * @return \DateTime
     */
    public function getGameStarted()
    {
        return $this->gameStartedAt;
    }

    /**
     * @return GameStatistics
     */
    public function setGameWon()
    {
        $this->gameWon = true;
        $this->gameEnded = true;
        $this->gameEndedOn = DateTime::now()->toString();
        return $this;
    }

    /**
     * Get gameWon
     *
     * @return boolean
     */
    public function getGameWon()
    {
        return $this->gameWon;
    }

    /**
     * @return GameStatistics
     */
    public function setGameLost()
    {
        $this->gameLost = true;
        $this->gameEnded = true;
        $this->gameEndedOn = DateTime::now()->toString();
        return $this;
    }

    /**
     * Get gameLost
     *
     * @return boolean
     */
    public function getGameLost()
    {
        return $this->gameLost;
    }

    /**
     * Get gameEnded
     *
     * @return boolean
     */
    public function getGameEnded()
    {
        return $this->gameEnded;
    }

    /**
     * Get gameEndedOn
     *
     * @return DateTime
     */
    public function getGameEndedOn()
    {
        return $this->gameEndedOn;
    }

    /**
     * Set correctGuessedLetters
     *
     * @param array $correctGuessedLetters
     *
     * @return GameStatistics
     */
    public function setCorrectGuessedLetters($correctGuessedLetters)
    {
        foreach ($correctGuessedLetters as $key => $val) {
            $this->correctGuessedLetters[] = $val;
        }

        return $this;
    }

    /**
     * Get correctGuessedLetters
     *
     * @return array
     */
    public function getCorrectGuessedLetters()
    {
        return $this->correctGuessedLetters;
    }

    /**
     * Set wrongGuessedLetters
     *
     * @param array $wrongGuessedLetters
     *
     * @return GameStatistics
     */
    public function setWrongGuessedLetters($wrongGuessedLetters)
    {
        $this->wrongGuessedLetters[] = $wrongGuessedLetters;

        return $this;
    }

    /**
     * Get wrongGuessedLetters
     *
     * @return array
     */
    public function getWrongGuessedLetters()
    {
        return $this->wrongGuessedLetters;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function exportToArray()
    {
        return [
            "id" => $this->id,
            "uuid" => $this->gameId,
            "word" => $this->word,
            "gameStartedAt" => $this->gameStartedAt,
            "status" => $this->status,
            "wrongLettersGuessed" => $this->wrongGuessedLetters,
            "correctLettersGuessed" => $this->correctGuessedLetters,
            "gameEnded" => $this->gameEnded,
            "gameEndedDate" => $this->gameEndedOn,
            "gameWon" => $this->gameWon,
            "gameLost" => $this->gameLost
        ];
    }
}
