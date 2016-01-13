<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 13-1-16
 * Time: 9:24
 */

namespace HangmanBundle\Models;


class TryCounter
{
    /**
     * @var int
     */
    private $maxTries;

    /**
     * TryCounter constructor.
     * @param int $max
     */
    public function __construct($max)
    {
        $this->maxCount = $max;
    }

    /**
     * @return int
     */
    public function notifyAmountTries()
    {
        return $this->maxTries;
    }

    /**
     * @return $this
     */
    public function removeATry()
    {
        if ($this->notifyAmountTries() == 0) {
            return;
        }

        $this->maxTries--;

        return $this;
    }

}