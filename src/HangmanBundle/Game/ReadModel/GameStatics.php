<?php

namespace HangmanBundle\Game\ReadModel;


use Broadway\ReadModel\ReadModelInterface;

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
     * @var string
     */
    private $letterWrongGuessed;

    /**
     * @var string
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
     * @var \DateTime
     */
    private $gameStartTime;

    /**
     * @var \DateTime
     */
    private $gameEndTime;


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
     * @return GameStatics
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
     * Set letterWrongGuessed
     *
     * @param string $letterWrongGuessed
     *
     * @return GameStatics
     */
    public function setLetterWrongGuessed($letterWrongGuessed)
    {
        $this->letterWrongGuessed = $letterWrongGuessed;

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
        $this->letterCorrectlyGuessed = $letterCorrectlyGuessed;

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
     * @return \DateTime
     */
    public function getExpanededTimeOnGame()
    {
        return $this->expanededTimeOnGame;
    }

    /**
     * Set gameStartTime
     *
     * @param \DateTime $gameStartTime
     *
     * @return GameStatics
     */
    public function setGameStartTime($gameStartTime)
    {
        $this->gameStartTime = $gameStartTime;

        return $this;
    }

    /**
     * Get gameStartTime
     *
     * @return \DateTime
     */
    public function getGameStartTime()
    {
        return $this->gameStartTime;
    }

    /**
     * Set gameEndTime
     *
     * @param \DateTime $gameEndTime
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
     * @return \DateTime
     */
    public function getGameEndTime()
    {
        return $this->gameEndTime;
    }
}
