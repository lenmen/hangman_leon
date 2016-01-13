<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 13-1-16
 * Time: 9:33
 */

namespace HangmanBundle\Models;

use Doctrine\Common\Collections\ArrayCollection;

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
     * @param string $letter
     * @return $this
     */
    public function addLetterToContainer($letter)
    {
        $this->lettersContainer->add($letter);
        return $this;
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

    /**
     * @return int
     */
    public function getAmountLettersStoredInContainer()
    {
        return count($this->lettersContainer);
    }

    /**
     * @param string $letter
     * @return bool
     */
    public function LetterExistsInContainer($letter)
    {
        return in_array($letter,$this->lettersContainer);
    }

    /**
     * @return mixed|null
     */
    public function convertContainerToString() {
        $container = $this->lettersContainer;
        asort($container);

        $letters = '';

        foreach ($container as $letter) {
            $letters .= $letter;
        }

        return $letter;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }
}