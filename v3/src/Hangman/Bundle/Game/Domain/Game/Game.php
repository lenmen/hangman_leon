<?php
/**
 * Created by PhpStorm.
 * User: lennardmoll
 * Date: 21/01/16
 * Time: 21:41
 */

namespace Hangman\Bundle\Game\Domain\Game;


use Assert\Assertion;
use Broadway\Domain\DateTime;
use Broadway\EventSourcing\EventSourcedAggregateRoot;

class Game extends EventSourcedAggregateRoot
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
     * @var string
     */
    private $lettersCorrectChosen;

    /**
     * @var
     */
    private $lettersWrongChosen;

    /**
     * @var bool
     */
    private $gameIsWon = false;

    /**
     * @var bool
     */
    private $gameIsLost = false;

    /**
     * @var DateTime
     */
    private $gameStartedAt;

    /**
     * @return string
     */
    public function getAggregateRootId()
    {
        return $this->gameId;
    }

    /**
     * @param string $uuid
     * @param string $word
     * @return Game
     */
    public static function startGame($uuid, $word)
    {
        Assertion::uuid($uuid);
        $game = new self($uuid, $word);
        $game->apply(new GameStarted($uuid, $word));
        return $game;
    }

    /**
     * @param GameStarted $event
     */
    public function applyGameStarted(GameStarted $event)
    {
        $this->gameId = $event->getGameId();
        $this->word = $event->getWord();
        $this->gameStartedAt = $event->getGameStartedAt();
    }
}