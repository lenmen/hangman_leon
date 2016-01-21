<?php
/**
 * Created by PhpStorm.
 * User: lennardmoll
 * Date: 21/01/16
 * Time: 22:45
 */

namespace Hangman\Bundle\Game\Application\Commands;


class StartGame
{
    /**
     * @var string
     */
    private $gameId;

    /**
     * @var string
     */
    private $word;

    /**
     * StartGame constructor.
     * @param string $uuid
     * @param string $word
     */
    public function __construct($uuid, $word)
    {
        $this->gameId = $uuid;
        $this->word = $word;
    }

    /**
     * @return string
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }
}