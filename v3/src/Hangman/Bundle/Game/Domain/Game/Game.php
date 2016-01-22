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
use Hangman\Bundle\Services\LetterService;
use Hangman\Bundle\Services\TryService;

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
     * @var LetterService
     */
    private $lettersCorrectChosen;

    /**
     * @var LetterService
     */
    private $lettersWrongChosen;

    /**
     * @var TryService
     */
    private $tries;

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
     * @var DateTime
     */
    private $gameEndedAt;

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
        $game = new static;
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
        $this->tries = TryService::init();
        $this->lettersCorrectChosen = new LetterService();
        $this->lettersWrongChosen = new LetterService();
    }

    public function chooseLetter($letter) {
        // Check if letter already has submitted
        if ($this->lettersCorrectChosen->LetterExistsInContainer($letter) || $this->lettersWrongChosen->LetterExistsInContainer($letter)) {
            // Throw wrong guest event
            $this->apply(new LetterWrongChosen($this->getAggregateRootId(), $letter));
            $this->throwGameLostIfConditionIsTrue();
            return;
        }

        // Check if the letter is in the word;
        $found = $this->findKeysInWord($letter);

        if ($found === false) {
            // throw lost event and look if the game is lost
            $this->apply(new LetterWrongChosen($this->getAggregateRootId(), $letter));
            $this->throwGameLostIfConditionIsTrue();
            return;
        }

        // Add the letters to the correct guessed event
        $this->apply(new LetterCorrectlyChosen($this->getAggregateRootId(), $found));

        $currentWord = $this->lettersCorrectChosen->convertArrayToString();

        // Check if the game is won
        if ($currentWord == $this->word) {
            $this->apply(new GameWon($this->getAggregateRootId()));
        }
    }

    /**
     * @param LetterCorrectlyChosen $event
     */
    public function applyLetterCorrectlyChosen(LetterCorrectlyChosen $event)
    {
        // Add to the array Collection
        foreach ($event->getLetters() as $key => $val) {
            $this->lettersCorrectChosen->addLetterWithKeyToContainer($key, $val);
        }
    }

    /**
     * @param GameWon $event
     */
    public function applyGameWon(GameWon $event)
    {
        $this->gameIsWon = true;
        $this->gameEndedAt = $event->getGameEndedAt();
    }

    /**
     * @param LetterWrongChosen $event
     */
    public function applyLetterWrongChosen(LetterWrongChosen $event)
    {
        $this->lettersWrongChosen->add($event->getLetter());
    }

    /**
     * @param GameLost $event
     */
    public function applyGameLost(GameLost $event)
    {
        $this->gameIsLost = true;
        $this->gameEndedAt = $event->getGameEndedAt();
    }

    /**
     * @param $letter
     * @return array|bool
     */
    public function findKeysInWord($letter)
    {
        $data = [];
        $pos = 0;

        while(($lastPost = strpos($this->word, $letter, $pos)) !== false) {
            $data[$lastPost] = $letter;
            $pos = $lastPost;
        }

        // return false if array is empty
        if (count($data) < 1) {
            return false;
        }

        return $data;
    }

    /**
     * Throw the Game Lost event when there are no tries left
     */
    private function throwGameLostIfConditionIsTrue()
    {
        if ($this->tries->notifyIfNoTriesLeft()) {
            $this->apply(new GameLost($this->getAggregateRootId()));
        }
    }
}