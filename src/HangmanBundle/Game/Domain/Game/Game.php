<?php


namespace HangmanBundle\Game\Domain\Game;


use Broadway\EventSourcing\EventSourcedAggregateRoot;
use Symfony\Component\HttpKernel\Exception\PreconditionFailedHttpException;
use Symfony\Component\HttpKernel\Exception\PreconditionRequiredHttpException;

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
     * @var int
     */
    private $tries = 1;

    /**
     * @var array
     */
    private $lettersCorrectlyGuessed = [];

    /**
     * @var array
     */
    private $lettersWrongGuessed = [];

    /**
     * @var bool
     */
    private $gameWon = false;

    /**
     * @var bool
     */
    private $gameLost = false;

    /**
     * @return string
     */
    public function getAggregateRootId()
    {
        return $this->gameId;
    }

    /**
     * @param string $gameId
     * @param string $word
     * @return Game
     */
    public static function createGame($gameId, $word)
    {
        $game = new Game();
        $game->apply(new GameStarted($gameId, $word));
        return $game;
    }

    /**
     * @param GameStarted $event
     */
    public function applyGameStarted(GameStarted $event)
    {
        $this->gameId = $event->getGameId();
        $this->word = $event->getWord();
    }

    /**
     * @param string $gameId
     * @param string $letter
     */
    public function chooseLetter($gameId, $letter)
    {
        // if letter already exists do nothing
        if (array_search($letter, $this->lettersCorrectlyGuessed) !== FALSE || array_search($letter, $this->lettersWrongGuessed)) {
            return;
        }

        // check if the word has the letter
        $outputLetters = [];
        $start = 0;

        // all founded letters in the $outputLetters
        while (($lastPosition = strpos($this->word, $letter, $start)) !== FALSE)
        {
            $outputLetters["$lastPosition"] = $letter;
            $start = $lastPosition + 1;
        }

        // Throw the event
        if (count($outputLetters) < 1) {
            $this->wrongGuessedLetter($gameId, $letter);
        } else {
            // Letter has been guessed check if the word hass been guessed


            $this->correctlyGuessedLetters($gameId, $outputLetters);
        }
    }

    /**
     * @param string $gameId
     * @param string $letter
     */
    private function wrongGuessedLetter($gameId, $letter)
    {
        if ($this->tries == 1) {
            $time = time();
            $this->apply(new GameLost($gameId, $time));
            return;
        }

        $this->apply(new WrongLetterGuessed($gameId, $letter));
    }

    /**
     * @param string $gameId
     * @param string $letter
     */
    private function correctlyGuessedLetters($gameId, $outputLetters)
    {
        $alreadyCorrectlyGuessed = $this->lettersCorrectlyGuessed;

        // Merge the array with the given letter
        $guessedLetters = array_merge($alreadyCorrectlyGuessed, $outputLetters);
        ksort($guessedLetters);

        $generatedWord = '';


        // Create a string of the array item
        foreach ($guessedLetters as $l) {
            if (is_array($l)) {
                continue;
            }
            $generatedWord .= $l;
        }

        //Check if the user has won the game or still in the game
        if ($this->word == $generatedWord) {
            $time = time();

            // User won the game
            $this->apply(new GameWon($gameId, $time));
        } else {
            // Add the letter to the event
            $this->apply(new LetterGuessedCorrectly($gameId, $outputLetters));
        }
    }


    /**
     * @param GameLost $event
     */
    public function applyGameLost(GameLost $event)
    {
        $this->tries--;
        $this->gameLost = true;
    }

    /**
     * @param GameWon $event
     */
    public function applyGameWon(GameWon $event)
    {
        $this->gameWon = true;
    }

    /**
     * @param WrongLetterGuessed $event
     */
    public function applyWrongLetterGuessed(WrongLetterGuessed $event)
    {
        $this->lettersWrongGuessed[] = $event->getLetter();
        $this->tries--;
    }

    /**
     * @param LetterGuessedCorrectly $event
     */
    public function applyLetterGuessedCorrectly(LetterGuessedCorrectly $event)
    {
        foreach ($event->getLetters() as $key => $val) {
            $this->lettersCorrectlyGuessed[$key] = $val;
        }
    }
}