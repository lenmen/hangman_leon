<?php


namespace HangmanBundle\Game\Domain\Game;


use Broadway\EventHandling\EventBusInterface;
use Broadway\EventSourcing\AggregateFactory\PublicConstructorAggregateFactory;
use Broadway\EventSourcing\EventSourcingRepository;
use Broadway\EventStore\EventStoreInterface;

class GameRepository extends EventSourcingRepository
{
    public function __construct(
        EventStoreInterface $eventStore,
        EventBusInterface $eventBus,
        array $eventStreamDecorators = []
    ) {
        parent::__construct(
            $eventStore,
            $eventBus,
            '\HangmanBundle\Game\Domain\Game\Game',
            new PublicConstructorAggregateFactory(),
            $eventStreamDecorators
        );
    }
}