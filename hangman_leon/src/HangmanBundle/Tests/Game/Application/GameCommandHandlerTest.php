<?php
/**
 * Created by PhpStorm.
 * User: lennard
 * Date: 14-1-16
 * Time: 11:12
 */

namespace HangmanBundle\Tests\Game\Application;


use Broadway\CommandHandling\CommandHandlerInterface;
use Broadway\CommandHandling\Testing\CommandHandlerScenarioTestCase;
use Broadway\EventHandling\EventBusInterface;
use Broadway\EventStore\EventStoreInterface;
use Broadway\UuidGenerator\Rfc4122\Version4Generator;
use HangmanBundle\Game\Application\Command\ChooseLetter;
use HangmanBundle\Game\Application\Command\GameStart;
use HangmanBundle\Game\Application\GameCommandHandler;
use HangmanBundle\Game\Domain\Game\GameLost;
use HangmanBundle\Game\Domain\Game\GameRepository;
use HangmanBundle\Game\Domain\Game\GameStarted;
use HangmanBundle\Game\Domain\Game\GameWon;
use HangmanBundle\Game\Domain\Game\LetterGuessedCorrectly;
use HangmanBundle\Game\Domain\Game\WrongLetterGuessed;

class GameCommandHandlerTest extends CommandHandlerScenarioTestCase
{
    /**
     * @var Version4Generator
     */
    private $generator;

    public function setUp()
    {
        $generator = new Version4Generator();
        $this->generator = $generator;

        // Create scenerario from parent
        parent::setUp();
    }

    protected function createCommandHandler(EventStoreInterface $eventStore, EventBusInterface $eventBus)
    {
        return new GameCommandHandler(
            new GameRepository($eventStore, $eventBus)
        );
    }

    /**
     * @test
     */
    public function game_can_be_created()
    {
        // Prefined variables
        $gameId = $this->generator->generate();
        $word = "phpunit";

        $command = new GameStart($gameId, $word);

        $this->scenario
            ->given([])
            ->when($command)
            ->then([
                new GameStarted($gameId, $word, new \DateTime())
            ]);
    }

    /**
     * @test
     */
    public function it_can_choose_a_wrong_letter()
    {
        // Prefined variables
        $id = $this->generator->generate();
        $datetime = new \DateTime("now");
        $gameStart = new GameStart($id, "phpunit");
        $gameStarted = new GameStarted($id, "phpunit", $datetime);

        $command = new ChooseLetter($id,'l');

        $this->scenario
            ->withAggregateId($id)
            ->given([])
            ->when($gameStart)
            ->then([
                $gameStarted
            ])
            ->when($command)
            ->then([
                new WrongLetterGuessed($id, 'l'),
            ]);
    }

    /**
     * @test
     */
    public function it_can_guess_a_correct_letter()
    {
        // Prefined variables
        $id = $this->generator->generate();
        $datetime = new \DateTime("now");
        $gameStart = new GameStart($id, "php");
        $gameStarted = new GameStarted($id, "php", $datetime);

        $command = new ChooseLetter($id, 'p');

        $this->scenario
            ->given([])
            ->when($gameStart)
            ->then([
                $gameStarted
            ])
            ->when($command)
            ->then([
                new LetterGuessedCorrectly($id, 'p')
            ]);
    }

    /**
     * @test
     */
    public function a_game_can_be_won()
    {
        // Prefined variables
        $id = $this->generator->generate();

        $datetime = new \DateTime("now");
        $gameStart = new GameStart($id, "p");
        $gameStarted = new GameStarted($id, "pp", $datetime);

        $command = new ChooseLetter($id, 'p');


        $this->scenario
            ->withAggregateId($id)
            ->given([new GameStarted($id, "pp", $datetime)])
            ->when($command)
            ->then([
                new LetterGuessedCorrectly($id, 'p'),
                new GameWon($id, new \DateTime("now"))
            ]);
    }

    /**
     * @test
     */
    public function a_game_can_be_lost()
    {
        // Prefined variables
        $id = $this->generator->generate();
        $datetime = new \DateTime("now");
        $command  = new ChooseLetter($id, 'p');

        $this->scenario
            ->withAggregateId($id)
            ->given([
                new GameStarted($id, "i", $datetime),
                new WrongLetterGuessed($id, 'p'),
                new WrongLetterGuessed($id, 'p'),
                new WrongLetterGuessed($id, 'p'),
                new WrongLetterGuessed($id, 'p'),
                new WrongLetterGuessed($id, 'p'),
                new WrongLetterGuessed($id, 'p'),
//                new WrongLetterGuessed($id, 'p')
            ])
            ->when($command)
            ->then([
                new WrongLetterGuessed($id, 'p'),
                new GameLost($id, new \DateTime("now"))
            ]);

    }

    /**
     * @test
     * @expectedException \Assert\InvalidArgumentException
     */
    public function it_can_not_chose_a_letter_when_finished()
    {
        // Prefined variables
        $id = $this->generator->generate();
        $datetime = new \DateTime("now");

        $this->scenario
            ->withAggregateId($id)
            ->given([
                new GameStarted($id, "l", $datetime),
                new LetterGuessedCorrectly($id, 'l'),
                new GameWon($id, $datetime)
            ])
            ->when(new ChooseLetter($id, 't'))
            ->then([]);
    }
}