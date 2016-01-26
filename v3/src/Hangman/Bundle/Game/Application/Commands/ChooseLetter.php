<?php
/**
 * Created by PhpStorm.
 * User: lennardmoll
 * Date: 21/01/16
 * Time: 23:38
 */

namespace Hangman\Bundle\Game\Application\Commands;


class ChooseLetter
{
    /**
     * @var string
     */
    private $gameId;

    /**
     * @var string
     */
    private $letter;

    /**
     * ChooseLetter constructor.
     * @param string $gameId
     * @param string $letter
     */
    public function __construct($gameId, $letter)
    {
        $this->gameId = $gameId;
        $this->letter = $letter;
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
    public function getLetter()
    {
        return $this->letter;
    }


}