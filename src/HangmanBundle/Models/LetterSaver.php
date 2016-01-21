<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 13-1-16
 * Time: 9:33
 */

namespace HangmanBundle\Models;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class LetterSaver
{
    /**
     * @var ArrayCollection
     */
    private $lettersContainer;

    /**
     * LetterSaver constructor.
     */
    public function __construct()
    {
        $this->lettersContainer = new ArrayCollection();
    }

    /**
     * @param int $key
     * @param string $letter
     * @return $this
     */
    public function addLetterWithKeyToContainer($key, $letter)
    {
        $this->lettersContainer->set($key, $letter);
        return $this;
    }

    public function addLetterToContainer($letter)
    {
        $this->lettersContainer->add($letter);
        return $this;
    }

    /**
     * @param string $letter
     * @return bool
     */
    public function LetterExistsInContainer($letter)
    {
        return in_array($letter,$this->lettersContainer->getValues());
    }

    /**
     * @return int
     */
    public function lengthOfContainer() {
        return count($this->lettersContainer);
    }

    public function getLettersFromContainer()
    {
        return json_encode($this->lettersContainer->getValues());
    }

    public function __toString()
    {
        return serialize($this->lettersContainer->toArray());
    }
}