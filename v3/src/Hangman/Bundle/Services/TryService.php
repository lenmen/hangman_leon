<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 22-1-16
 * Time: 11:00
 */

namespace Hangman\Bundle\Services;


use Broadway\Serializer\SerializableInterface;

class TryService implements SerializableInterface
{
    /**
     * @var int
     */
    private $triesLeft;

    /**
     * TryService constructor.
     * @param int $tries
     */
    private function __construct($tries)
    {
        $this->triesLeft = $tries;
    }

    /**
     * @param int $tries
     * @return TryService
     */
    public static function init($tries = 10)
    {
        $tryService = new self($tries);
        return $tryService;
    }

    /**
     * @return int
     */
    public function getTries()
    {
        return $this->triesLeft;
    }

    /**
     * @return $this
     */
    public function removeATry() {
        $this->triesLeft--;
        return $this;
    }

    /**
     * @return bool
     */
    public function notifyIfNoTriesLeft() {
        return $this->triesLeft == 1;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->serialize();
    }

    /**
     * @param array $data
     * @return TryService
     */
    public static function deserialize(array $data)
    {
        return new self($data["tries"]);
    }

    /**
     * @return string
     */
    public function serialize()
    {
        $data = [
            "tries" => $this->getTries()
        ];

        return serialize($data);
    }
}