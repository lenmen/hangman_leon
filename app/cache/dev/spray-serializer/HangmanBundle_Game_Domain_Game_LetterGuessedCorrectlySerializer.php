<?php

namespace HangmanBundle\Game\Domain\Game;

use Spray\Serializer\Object\BoundClosureSerializer;
use Spray\Serializer\SerializerInterface;

class LetterGuessedCorrectlySerializer extends BoundClosureSerializer
{
    public function __construct()
    {
        parent::__construct('HangmanBundle\Game\Domain\Game\LetterGuessedCorrectly');
    }
    
    protected function bindSerializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $data['letters'] = (array) $subject->letters;
        };
    }
    
    protected function bindDeserializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $subject->letters = isset($data['letters']) ? (array) $data['letters'] : array();
        };
    }
}
