<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 13-1-16
 * Time: 11:49
 */

namespace HangmanBundle\Factories;


use HangmanBundle\Game\ReadModel\GameStatics;

class GameStaticsFactory
{
    /**
     * @param $gameId
     * @return GameStatics
     */
    public static function initNewGameStatics($gameId, $startTime)
    {
        $gameStatics = new GameStatics();
        $gameStatics->setGameId($gameId)
            ->setGameStatus("in progress")
            ->setGameStartTime($startTime);

        return $gameStatics;
    }
}