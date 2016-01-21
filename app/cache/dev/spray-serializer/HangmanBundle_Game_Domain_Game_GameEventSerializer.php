<?php

namespace HangmanBundle\Game\Domain\Game;

use Spray\Serializer\Object\BoundClosureSerializer;
use Spray\Serializer\SerializerInterface;

class GameEventSerializer extends BoundClosureSerializer
{
    public function __construct()
    {
        parent::__construct('HangmanBundle\Game\Domain\Game\GameEvent');
    }
    
    protected function bindSerializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $data['gameId'] = (string) $subject->gameId;
        };
    }
    
    protected function bindDeserializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $subject->gameId = isset($data['gameId']) ? (string) $data['gameId'] : null;
        };
    }
}
