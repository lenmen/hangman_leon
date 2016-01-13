<?php


namespace HangmanBundle\Game\Domain\Game;


use Broadway\Domain\DateTime;
use Broadway\EventSourcing\EventSourcedAggregateRoot;
use HangmanBundle\Models\LetterSaver;
use HangmanBundle\Models\TryCounter;
use HangmanBundle\Models\WordChecker;
use Symfony\Component\HttpKernel\Exception\PreconditionFailedHttpException;
use Symfony\Component\HttpKernel\Exception\PreconditionRequiredHttpException;

class Game extends EventSourcedAggregateRoot
{
    /**
     * @var string
     */
    private $gameId;

    /**
     * @var WordChecker
     */
    private $word;

    /**
     * @var TryCounter
     */
    private $tries;

    /**
     * @var LetterSaver
     */
    private $lettersCorrectlyGuessed;

    /**
     * @var LetterSaver
     */
    private $lettersWrongGuessed;

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
        $dateTime = new \DateTime("now");

        $game->apply(new GameStarted($gameId, $word, $dateTime));
        return $game;
    }

    /**
     * @param GameStarted $event
     */
    public function applyGameStarted(GameStarted $event)
    {
        $this->gameId = $event->getGameId();
        $this->word = new WordChecker($event->getWord());
        $this->tries = new TryCounter(8);
        $this->lettersCorrectlyGuessed = new LetterSaver();
        $this->lettersWrongGuessed = new LetterSaver();
    }

    /**
     * @param string $gameId
     * @param string $letter
     */
    public function chooseLetter($gameId, $letter)
    {
        // if letter already exists do nothing
        if ($this->lettersCorrectlyGuessed->LetterExistsInContainer($letter) || $this->lettersWrongGuessed->LetterExistsInContainer($letter)) {
           return;
        }

        // Execute the right event
        $wordContainsLetter = $this->word->wordContainsLetter($letter);

        if ($wordContainsLetter === FALSE) {
            $this->wrongGuessedLetter($gameId, $letter);
            return;
        }

        // throw good guess
        $this->correctlyGuessedLetters($gameId, $letter);
    }

    /**
     * @param string $gameId
     * @param string $letter
     */
    private function wrongGuessedLetter($gameId, $letter)
    {
        if ($this->tries->notifyAmountTries() == 1) {
            $time = new \DateTime("now");
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
        // Get the letters and position of the letters

        // Throw the event
        $this->apply(new LetterGuessedCorrectly($gameId, $outputLetters));

        $checkCurrentLetters = $this->word->getLocationsOfLetters($outputLetters);
        $correctlyGuesed = $this->lettersCorrectlyGuessed;

        foreach ($correctlyGuesed as $pos => $l) {
            $correctlyGuesed->addLetterWithKeyToContainer($pos, $l);
        }

        // Check if the user has guessed the letters
        $word = $this->lettersCorrectlyGuessed->convertContainerToString();

        if($this->word->matchWord($word)) {
            $this->apply(new Gamewon($gameId));
        }
    }


    /**
     * @param GameLost $event
     */
    public function applyGameLost(GameLost $event)
    {
        $this->tries->removeATry();
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
        $this->lettersWrongGuessed->addLetterToContainer($event->getLetter());
        $this->tries->removeATry();
    }

    /**
     * @param LetterGuessedCorrectly $event
     */
    public function applyLetterGuessedCorrectly(LetterGuessedCorrectly $event)
    {
        $lettersAndPosition = $this->word->getLocationsOfLetters($event->getLetters());

        // add the letters to the container
        foreach ($lettersAndPosition as $pos => $val)
        {
            $this->lettersCorrectlyGuessed->addLetterWithKeyToContainer($pos, $val);
        }
    }
}