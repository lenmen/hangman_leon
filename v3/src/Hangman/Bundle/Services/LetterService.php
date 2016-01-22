<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 13-1-16
 * Time: 9:33
 */

namespace Hangman\Bundle\Services;

use Broadway\Serializer\SerializableInterface;
use Doctrine\Common\Collections\ArrayCollection;

class LetterService extends ArrayCollection implements SerializableInterface
{
    /**
     * LetterService constructor.
     * @param array $elements
     */
    public function __construct(array $elements = [])
    {
        parent::__construct($elements);
    }

    /**
     * @param int $key
     * @param string $letter
     * @return $this
     */
    public function addLetterWithKeyToContainer($key, $letter)
    {
        parent::set($key, $letter);
        return $this;
    }

    /**
     * @param string $letter
     * @return bool
     */
    public function LetterExistsInContainer($letter)
    {
        return in_array($letter,parent::getValues());
    }

    /**
     * @return int
     */
    public function lengthOfContainer() {
        return count(parent::toArray());
    }

    /**
     * @return string
     */
    public function convertArrayToString() {
        $lettersArray = parent::toArray();
        $letters = '';
        ksort($lettersArray);

        foreach ($lettersArray as $letter) {
            $letters .= $letter;
        }

        return $letters;

    }

    public function __toString()
    {
       return $this->serialize();
    }

    /**
     * @param array $data
     * @return LetterService
     */
    public static function deserialize(array $data)
    {
        return new self($data);
    }

    /**
     * @return array
     */
    public function serialize()
    {
        // Serialize all elemenets of Array Collection as an array
        $data = parent::toArray();

        return serialize($data);
    }


}