<?php
/**
 * Created by PhpStorm.
 * User: lennardmoll
 * Date: 21/01/16
 * Time: 22:28
 */

namespace Hangman\Bundle\Game\Domain\Game;


use Broadway\EventSourcing\AggregateFactory\PublicConstructorAggregateFactory;
use Broadway\EventSourcing\EventSourcingRepository;
use Broadway\EventStore\EventStoreInterface;
use Broadway\EventHandling\EventBusInterface;

class GameRepository extends EventSourcingRepository
{
    public function __construct(EventStoreInterface $eventStore, EventBusInterface $eventBus, $eventStreamDecorators = [])
    {
        parent::__construct($eventStore, $eventBus, '\Hangman\Bundle\Game\Domain\Game\Game', new PublicConstructorAggregateFactory(), $eventStreamDecorators);
    }
}