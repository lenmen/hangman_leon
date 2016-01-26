<?php

namespace Hangman\Bundle\Game\Domain\Game;

use Spray\Serializer\Object\BoundClosureSerializer;
use Spray\Serializer\SerializerInterface;

class LetterWrongChosenSerializer extends BoundClosureSerializer
{
    public function __construct()
    {
        parent::__construct('Hangman\Bundle\Game\Domain\Game\LetterWrongChosen');
    }
    
    protected function bindSerializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $data['gameId'] = (string) $subject->gameId;
            $data['letter'] = (string) $subject->letter;
        };
    }
    
    protected function bindDeserializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $subject->gameId = isset($data['gameId']) ? (string) $data['gameId'] : null;
            $subject->letter = isset($data['letter']) ? (string) $data['letter'] : null;
        };
    }
}