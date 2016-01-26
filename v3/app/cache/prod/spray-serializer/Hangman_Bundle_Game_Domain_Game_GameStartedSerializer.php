<?php

namespace Hangman\Bundle\Game\Domain\Game;

use Spray\Serializer\Object\BoundClosureSerializer;
use Spray\Serializer\SerializerInterface;

class GameStartedSerializer extends BoundClosureSerializer
{
    public function __construct()
    {
        parent::__construct('Hangman\Bundle\Game\Domain\Game\GameStarted');
    }
    
    protected function bindSerializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $data['gameId'] = (string) $subject->gameId;
            $data['word'] = (string) $subject->word;
            $data['gameStartedAt'] = isset($subject->gameStartedAt) ? $serializer->serialize($subject->gameStartedAt) : null;
        };
    }
    
    protected function bindDeserializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $subject->gameId = isset($data['gameId']) ? (string) $data['gameId'] : null;
            $subject->word = isset($data['word']) ? (string) $data['word'] : null;
            $subject->gameStartedAt = isset($data['gameStartedAt']) ? $serializer->deserialize('Broadway\Domain\DateTime', $data['gameStartedAt']) : null;
        };
    }
}
