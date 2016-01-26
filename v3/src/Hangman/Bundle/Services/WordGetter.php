<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 25-1-16
 * Time: 11:15
 */

namespace Hangman\Bundle\Services;


use Symfony\Component\Translation\Exception\NotFoundResourceException;

class WordGetter
{
    /**
     * @var string;
     */
    private $word;

    public function __construct()
    {
        // Get the word with curl
        $this->word = $this->getWordWithCurl();
    }

    /**
     * @throws NotFoundResourceException
     * @return string
     */
    private function getWordWithCurl()
    {
        $ch = curl_init("http://randomword.setgetgo.com/get.php");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $word = curl_exec($ch);
        curl_close($ch);

        return strtolower($word);
    }

    /**
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }
}