<?php


namespace HangmanBundle\Game\Domain\Game;


use Assert\Assertion;
use Broadway\Domain\DateTime;
use Broadway\EventSourcing\EventSourcedAggregateRoot;
use HangmanBundle\Models\LetterSaver;
use HangmanBundle\Models\TryCounter;
use HangmanBundle\Models\WordChecker;
use Rhumsaa\Uuid\Console\Exception;
use Rhumsaa\Uuid\Doctrine\UuidType;
use Symfony\Component\HttpKernel\Exception\PreconditionFailedHttpException;
use Symfony\Component\HttpKernel\Exception\PreconditionRequiredHttpException;
use Symfony\Component\Routing\Exception\InvalidParameterException;
use Symfony\Component\Validator\Constraints\UuidValidator;

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
    public static function gameStart($gameId, $word)
    {
        Assertion::uuid($gameId, "Not a valid uuid");

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
     * @return int
     */
    public function chooseLetter($gameId, $letter)
    {
        Assertion::false($this->gameWon, "Game already won");
        Assertion::false($this->gameLost,"Game already lost");

        // if letter already exists do nothing
        if ($this->lettersCorrectlyGuessed->LetterExistsInContainer($letter) || $this->lettersWrongGuessed->LetterExistsInContainer($letter)) {
            $this->wrongGuessedLetter($gameId, $letter);
            return;
        }

        // Execute the right event
        $wordContainsLetter = $this->word->wordContainsLetter($letter);


        if ($wordContainsLetter === false) {
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
        $this->apply(new WrongLetterGuessed($gameId, $letter));

        if ($this->tries->notifyAmountTries() == 1) {
            $time = new \DateTime("now");
            $this->apply(new GameLost($gameId, $time));
        }
    }

    /**
     * @param string $gameId
     * @param string $letter
     */
    private function correctlyGuessedLetters($gameId, $outputLetters)
    {
        // Throw the event
        $this->apply(new LetterGuessedCorrectly($gameId, $outputLetters));

        $all_found = false;

        // check if the array has the same size
        if ($this->lettersCorrectlyGuessed->lengthOfContainer() == $this->word->getLenghtOfWord()) {
            // convert string to array
            $arrLetters = $this->word->getLocationsAndLettersOfContainer($outputLetters);

            foreach ($arrLetters as $l) {
                if ($this->word->wordContainsLetter($l) === false) {
                    $all_found = false;
                    break;
                }

                $all_found = true;
            }
        }

        if($all_found) {
            $this->apply(new GameWon($this->gameId, new \DateTime("now")));
        }
    }

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
        $lettersAndPosition = $this->word->getLocationsAndLettersOfContainer($event->getLetters());

        // add the letters to the container
        foreach ($lettersAndPosition as $pos => $val)
        {
            $this->lettersCorrectlyGuessed->addLetterWithKeyToContainer($pos, $val);
        }
    }
}