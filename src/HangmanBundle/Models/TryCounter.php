<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 13-1-16
 * Time: 9:24
 */

namespace HangmanBundle\Models;


use Assert\Assertion;
use Symfony\Component\OptionsResolver\Exception\AccessException;

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
        $this->maxTries = $max;
    }

    /**]
     * @return int
     */
    public function notifyAmountTries()
    {
        Assertion::numeric($this->maxTries, "The property doesn't have an integer as value");

        return $this->maxTries;
    }

    /**
     * @return $this
     */
    public function removeATry()
    {
        $this->maxTries--;

        return $this;
    }
}