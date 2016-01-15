<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 13-1-16
 * Time: 9:40
 */

namespace HangmanBundle\Models;


class WordChecker
{
    /**
     * @var string
     */
    private $word;

    /**
     * WordChecker constructor.
     * @param string $word
     */
    public function __construct($word)
    {
        $this->word = $word;
    }

    /**
     * @return int
     */
    public function getLenghtOfWord()
    {
        return strlen($this->word);
    }

    /**
     * @param string $letter
     * @return bool|int
     */
    public function wordContainsLetter($letter)
    {
        return strpos($this->word, $letter);
    }

    /**
     * @param string $letter
     * @return int
     */
    public function amountLettersFoundInWord($letter)
    {
        return substr_count($this->word, $letter);
    }

    /**
     * @param string $letter
     * @return array
     */
    public function getLocationsAndLettersOfContainer($letter)
    {
        $letterLocations = [];
        $pos = 0;

        while (($lastPos = strpos($this->word, $letter, $pos)) !== FALSE) {
            $letterLocations[$lastPos] = $letter;
            $pos = $lastPos + 1;
        }

        return $letterLocations;
    }

    /**
     * @param string $word
     * @return bool
     */
    public function matchWord($word)
    {
        return ($this->word == $word);
    }

    /**
     * @return string
     */
    protected function getWord()
    {
        return $this->word;
    }
}