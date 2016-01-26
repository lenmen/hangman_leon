<?php

namespace Hangman\Bundle\Game\Domain\Game;

use Spray\Serializer\Object\BoundClosureSerializer;
use Spray\Serializer\SerializerInterface;

class GameWonSerializer extends BoundClosureSerializer
{
    public function __construct()
    {
        parent::__construct('Hangman\Bundle\Game\Domain\Game\GameWon');
    }
    
    protected function bindSerializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $data['gameId'] = (string) $subject->gameId;
            $data['GameEndedAt'] = isset($subject->GameEndedAt) ? $serializer->serialize($subject->GameEndedAt) : null;
        };
    }
    
    protected function bindDeserializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $subject->gameId = isset($data['gameId']) ? (string) $data['gameId'] : null;
            $subject->GameEndedAt = isset($data['GameEndedAt']) ? $serializer->deserialize('Broadway\Domain\DateTime', $data['GameEndedAt']) : null;
        };
    }
}
