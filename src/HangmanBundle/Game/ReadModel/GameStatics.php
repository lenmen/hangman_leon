<?php

namespace HangmanBundle\Game\ReadModel;


use Broadway\ReadModel\ReadModelInterface;
use HangmanBundle\Models\LetterSaver;
use HangmanBundle\Models\WordChecker;
use Broadway\Domain\DateTime;

class GameStatics implements ReadModelInterface
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
     * @var LetterSaver
     */
    private $letterWrongGuessed;

    /**
     * @var LetterSaver
     */
    private $letterCorrectlyGuessed;

    /**
     * @var string
     */
    private $gameStatus;

    /**
     * @var \DateTime
     */
    private $expanededTimeOnGame;

    /**
     * @var string
     */
    private $gameStartTime;

    /**
     * @var DateTime
     */
    private $gameEndTime;

    /**
     * GameStatics constructor.
     * @param $gameId
     * @param $word
     * @param $startTime
     * @param string $status
     */
    public function __construct($gameId, $word, $startTime, $status = "in progress")
    {
        $this->gameId = $gameId;
        $this->word = new WordChecker($word);
        $this->gameStatus = $status;
        $this->gameStartTime = $startTime;
        $this->letterWrongGuessed = new LetterSaver();
        $this->letterCorrectlyGuessed = new LetterSaver();
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
     * @return string
     */
    public function getGameId()
    {
        return $this->gameId;
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
        var_dump($this->letterWrongGuessed);
       //$letterWrongGuessedProperty = unserialize($this->letterWrongGuessed);


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
        var_dump($this->letterCorrectlyGuessed);
//        $letterCorrectlyGuessedPropperty = unserialize($this->letterCorrectlyGuessed);
//        var_dump($letterCorrectlyGuessedPropperty);
  //      $this->letterCorrectlyGuessed = $letterCorrectlyGuessedPropperty;

        $this->letterCorrectlyGuessed->addLetterToContainer($letterCorrectlyGuessed);

        return $this;
    }

    /**
     * Get letterCorrectlyGuessed
     *
     * @return string
     */
    public function getLetterCorrectlyGuessed()
    {
        return $this->letterCorrectlyGuessed;
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
     * Set expanededTimeOnGame
     *
     * @param \DateTime $expanededTimeOnGame
     *
     * @return GameStatics
     */
    public function setExpanededTimeOnGame($expanededTimeOnGame)
    {
        $this->expanededTimeOnGame = $expanededTimeOnGame;

        return $this;
    }

    /**
     * Get expanededTimeOnGame
     *
     * @return DateTime
     */
    public function getExpanededTimeOnGame()
    {
        return $this->expanededTimeOnGame;
    }

    /**
     * Get gameStartTime
     *
     * @return DateTime
     */
    public function getGameStartTime()
    {
        return $this->gameStartTime;
    }

    /**
     * Set gameEndTime
     *
     * @param DateTime $gameEndTime
     *
     * @return GameStatics
     */
    public function setGameEndTime($gameEndTime)
    {
        $this->gameEndTime = $gameEndTime;

        return $this;
    }

    /**
     * Get gameEndTime
     *
     * @return DateTime
     */
    public function getGameEndTime()
    {
        return $this->gameEndTime;
    }

    /**
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }
}
