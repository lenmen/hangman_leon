<?php

namespace HangmanBundle\Game\ReadModel;

/**
 * GameEnd
 */
class GameEnd
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
     * @var integer
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $timeExpanned;

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
     * @return GameEnd
     */
    public function setGameIdLetterSaver($gameId)
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
     * Set status
     *
     * @param integer $status
     *
     * @return GameEnd
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set timeExpanned
     *
     * @param \DateTime $timeExpanned
     *
     * @return GameEnd
     */
    public function setTimeExpanned($timeExpanned)
    {
        $this->timeExpanned = $timeExpanned;

        return $this;
    }

    /**
     * Get timeExpanned
     *
     * @return \DateTime
     */
    public function getTimeExpanned()
    {
        return $this->timeExpanned;
    }
}
