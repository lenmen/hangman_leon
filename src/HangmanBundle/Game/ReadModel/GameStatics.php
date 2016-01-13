<?php

namespace HangmanBundle\Game\ReadModel;

/**
 * GameStatics
 */
class GameStatics
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
    private $LetterWrongGuessed;

    /**
     * @var string
     */
    private $LetterCorrectlyGuessed;

    /**
     * @var string
     */
    private $GameStatus;

    /**
     * @var \DateTime
     */
    private $ExpanededTimeOnGame;


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
        $this->LetterWrongGuessed = $letterWrongGuessed;

        return $this;
    }

    /**
     * Get letterWrongGuessed
     *
     * @return string
     */
    public function getLetterWrongGuessed()
    {
        return $this->LetterWrongGuessed;
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
        $this->LetterCorrectlyGuessed = $letterCorrectlyGuessed;

        return $this;
    }

    /**
     * Get letterCorrectlyGuessed
     *
     * @return string
     */
    public function getLetterCorrectlyGuessed()
    {
        return $this->LetterCorrectlyGuessed;
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
        $this->GameStatus = $gameStatus;

        return $this;
    }

    /**
     * Get gameStatus
     *
     * @return string
     */
    public function getGameStatus()
    {
        return $this->GameStatus;
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
        $this->ExpanededTimeOnGame = $expanededTimeOnGame;

        return $this;
    }

    /**
     * Get expanededTimeOnGame
     *
     * @return \DateTime
     */
    public function getExpanededTimeOnGame()
    {
        return $this->ExpanededTimeOnGame;
    }
}

