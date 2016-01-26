<?php
/**
 * Created by PhpStorm.
 * User: lennardmoll
 * Date: 21/01/16
 * Time: 23:01
 */

namespace Hangman\Bundle\Tests\Game\Application;


use Broadway\CommandHandling\Testing\CommandHandlerScenarioTestCase;
use Broadway\EventHandling\EventBusInterface;
use Broadway\EventStore\EventStoreInterface;
use Broadway\UuidGenerator\Rfc4122\Version4Generator;
use Hangman\Bundle\Game\Application\Commands\ChooseLetter;
use Hangman\Bundle\Game\Application\Commands\StartGame;
use Hangman\Bundle\Game\Application\GameCommandHandler;
use Hangman\Bundle\Game\Domain\Game\GameRepository;
use Hangman\Bundle\Game\Domain\Game\GameStarted;
use Hangman\Bundle\Game\Domain\Game\GameWon;
use Hangman\Bundle\Game\Domain\Game\LetterCorrectlyChosen;
use Hangman\Bundle\Game\Domain\Game\LetterWrongChosen;

class GameCommandHandlerTest extends CommandHandlerScenarioTestCase
{
    /**
     * @var Version4Generator
     */
    private $generator;

    public function setUp()
    {
        parent::setUp();

        $this->generator = new Version4Generator();
    }

    /**
     * @param EventStoreInterface $eventStore
     * @param EventBusInterface $eventBus
     * @return GameCommandHandler
     */
    protected function createCommandHandler(EventStoreInterface $eventStore, EventBusInterface $eventBus)
    {
        return new GameCommandHandler(
            new GameRepository($eventStore, $eventBus)
        );
    }

    /**
     * @test
     */
    public function it_can_create_a_game()
    {
        $uuid = $this->generator->generate();
        $word = "test";

        $this->scenario
            ->given([])
            ->when(new StartGame($uuid, $word))
            ->then([
                new GameStarted($uuid, $word)
            ]);
    }

    /**
     * @test
     * @expectedException \Assert\InvalidArgumentException
     */
    public function it_can_not_create_a_game()
    {
        $uuid = "ik ben een uuid";
        $word = "lol";

        $this->scenario
            ->given()
            ->when(new StartGame($uuid, $word))
            ->then([

            ]);
    }

    /**
     * @test
     */
    public function it_can_choose_a_correct_letter()
    {
        $uuid = $this->generator->generate();
        $word = "test";

        $this->scenario
            ->withAggregateId($uuid)
            ->given([new GameStarted($uuid, $word)])
            ->when(new ChooseLetter($uuid, 't'))
            ->then([
                new LetterCorrectlyChosen($uuid, [0 => 't', 3 => 't'])
            ]);
    }

    /**
     * @test
     */
    public function it_can_choose_a_wrong_letter()
    {
        $uuid = $this->generator->generate();
        $word = "test";

        $this->scenario
            ->withAggregateId($uuid)
            ->given([new GameStarted($uuid, $word)])
            ->when(new ChooseLetter($uuid, 'p'))
            ->then([
                new LetterWrongChosen($uuid, 'p')
            ]);
    }

    /**
     * @test
     */
    public function it_can_win_a_game()
    {
        $uuid = $this->generator->generate();
        $word = "test";

        $this->scenario
            ->withAggregateId($uuid)
            ->given([
                new GameStarted($uuid, $word),
                new LetterCorrectlyChosen($uuid, [0 => 't', 3 => 't']),
                new LetterCorrectlyChosen($uuid, [1 => 'e'])
            ])
            ->when(new ChooseLetter($uuid, 's'))
            ->then([
                new LetterCorrectlyChosen($uuid, [2 => 's']),
                new GameWon($uuid)
            ]);
    }

    /**
     * @test
     */
    public function its_a_wrong_letter_when_same_letter_given_twice()
    {
        $uuid = $this->generator->generate();
        $word = "test";

        $this->scenario
            ->withAggregateId($uuid)
            ->given([
                new GameStarted($uuid, $word),
                new LetterCorrectlyChosen($uuid, [0 => 't', 2 => 't'])
            ])
            ->when(new ChooseLetter($uuid, 't'))
            ->then([
                new LetterWrongChosen($uuid, 't')
            ]);
    }

}