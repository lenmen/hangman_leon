<?php

namespace Hangman\Bundle\Game\Domain\Game;

use Spray\Serializer\Object\BoundClosureSerializer;
use Spray\Serializer\SerializerInterface;

class LetterCorrectlyChosenSerializer extends BoundClosureSerializer
{
    public function __construct()
    {
        parent::__construct('Hangman\Bundle\Game\Domain\Game\LetterCorrectlyChosen');
    }
    
    protected function bindSerializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $data['gameId'] = (string) $subject->gameId;
            $data['letters'] = (array) $subject->letters;
        };
    }
    
    protected function bindDeserializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $subject->gameId = isset($data['gameId']) ? (string) $data['gameId'] : null;
            $subject->letters = isset($data['letters']) ? (array) $data['letters'] : array();
        };
    }
}
