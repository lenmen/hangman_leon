<?php

namespace HangmanBundle\Game\Domain\Game;

use Spray\Serializer\Object\BoundClosureSerializer;
use Spray\Serializer\SerializerInterface;

class GameLostSerializer extends BoundClosureSerializer
{
    public function __construct()
    {
        parent::__construct('HangmanBundle\Game\Domain\Game\GameLost');
    }
    
    protected function bindSerializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $data['expandedTimeOnGame'] = isset($subject->expandedTimeOnGame) ? $serializer->serialize($subject->expandedTimeOnGame) : null;
        };
    }
    
    protected function bindDeserializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $subject->expandedTimeOnGame = isset($data['expandedTimeOnGame']) ? $serializer->deserialize('\DateTime', $data['expandedTimeOnGame']) : null;
        };
    }
}
