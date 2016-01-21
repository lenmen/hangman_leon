<?php

namespace HangmanBundle\Game\Domain\Game;

use Spray\Serializer\Object\BoundClosureSerializer;
use Spray\Serializer\SerializerInterface;

class WrongLetterGuessedSerializer extends BoundClosureSerializer
{
    public function __construct()
    {
        parent::__construct('HangmanBundle\Game\Domain\Game\WrongLetterGuessed');
    }
    
    protected function bindSerializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $data['letter'] = (string) $subject->letter;
        };
    }
    
    protected function bindDeserializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $subject->letter = isset($data['letter']) ? (string) $data['letter'] : null;
        };
    }
}
