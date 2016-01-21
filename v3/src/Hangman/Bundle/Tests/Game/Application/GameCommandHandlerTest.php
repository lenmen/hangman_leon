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
use Hangman\Bundle\Game\Application\Commands\StartGame;
use Hangman\Bundle\Game\Application\GameCommandHandler;
use Hangman\Bundle\Game\Domain\Game\GameRepository;
use Hangman\Bundle\Game\Domain\Game\GameStarted;

class GameCommandHandlerTest extends CommandHandlerScenarioTestCase
{
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
        $generator = new Version4Generator();

        $uuid = $generator->generate();
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
}