<?php

namespace Hangman\Bundle\Game\ReadModel;
use Assert\Assertion;
use Broadway\ReadModel\ReadModelInterface;
use Broadway\Serializer\SerializableInterface;
use Hangman\Bundle\Services\LetterService;

/**
 * Game
 */
class Game implements ReadModelInterface, SerializableInterface
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
     * @var string
     */
    private $word;

    /**
     * @var string
     */
    private $gameStatus;

    /**
     * @var Array
     */
    private $letterGuessedCorrectly;

    /**
     * @var Array
     */
    private $letterWrongGuessed;

    /**
     * @var bool
     */
    private $gameWon = false;

    /**
     * @var bool
     */
    private $gameLost = false;

    /**
     * Game constructor.
     * @param string $gameId
     * @param string $word
     */
    public function __construct($gameId, $word)
    {
        $this->letterGuessedCorrectly = [];
        $this->letterWrongGuessed = [];
        $this->gameId = $gameId;
        $this->gameStatus = "in progress";
        $this->word = $word;
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
     * Set letterWrongGuessed
     *
     * @param string $letterWrongGuessed
     *
     * @return GameStatics
     */
    public function setLetterWrongGuessed($letterWrongGuessed)
    {
        array_push($this->letterWrongGuessed, $letterWrongGuessed);

        return $this;
    }

    /**
     * Get letterWrongGuessed
     *
            "lettersCorrectChosen" => $this->letterGuessedCorrectly
     * @return array
     */
    public function getLetterWrongGuessed()
    {
        return $this->letterWrongGuessed;
    }

    /**
     * Set letterCorrectlyGuessed
     *
     * @param array $letterCorrectlyGuessed
     *
     * @return GameStatics
     */
    public function setLetterCorrectlyGuessed($letterCorrectlyGuessed)
    {
        foreach ($letterCorrectlyGuessed as $key => $val) {
            $this->letterGuessedCorrectly[$key] = $val;
        }

        return $this;
    }

    /**
     * Get letterCorrectlyGuessed
     *
     * @return array
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
     * Get gameStatus
     *
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
        return $this->gameLost;
    }

    public function setGameLost()
    {
        $this->gameLost = true;
    }

    public static function deserialize(array $data)
    {
        return self($data["gameId"], $data["word"]);
    }

    public function serialize()
    {
        $dataToSerialize = [
            "gameId" => $this->gameId,
            "word" => $this->word
        ];

        return $dataToSerialize;
    }


}