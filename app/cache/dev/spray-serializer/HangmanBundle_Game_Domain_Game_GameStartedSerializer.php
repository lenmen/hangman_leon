<?php

namespace HangmanBundle\Game\Domain\Game;

use Spray\Serializer\Object\BoundClosureSerializer;
use Spray\Serializer\SerializerInterface;

class GameStartedSerializer extends BoundClosureSerializer
{
    public function __construct()
    {
        parent::__construct('HangmanBundle\Game\Domain\Game\GameStarted');
    }
    
    protected function bindSerializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $data['word'] = (string) $subject->word;
            $data['startTime'] = isset($subject->startTime) ? $serializer->serialize($subject->startTime) : null;
        };
    }
    
    protected function bindDeserializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $subject->word = isset($data['word']) ? (string) $data['word'] : null;
            $subject->startTime = isset($data['startTime']) ? $serializer->deserialize('\DateTime', $data['startTime']) : null;
        };
    }
}
