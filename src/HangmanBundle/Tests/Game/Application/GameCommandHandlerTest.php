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
    private $uuid;

    public function setUp()
    {
        $generator = new Version4Generator();
        $this->uuid = $generator->generate();

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
        $gameId = $this->uuid;
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
    public function it_can_choose_letter()
    {
        // Prefined variables
        $datetime = new \DateTime("now");
        $gameStart = new GameStart($this->uuid, "phpunit");
        $gameStarted = new GameStarted($this->uuid, "phpunit", $datetime);

        $command = new ChooseLetter($this->uuid,'l');

        $this->scenario
            ->given([])
            ->when($gameStart)
            ->then([
                $gameStarted
            ])
            ->when($command)
            ->then([
                new WrongLetterGuessed($this->uuid, 'l'),
                new LetterGuessedCorrectly($this->uuid, 'l'),
                new GameLost($this->uuid, $datetime),
                new GameWon($this->uuid, $datetime)
            ]);
    }
}