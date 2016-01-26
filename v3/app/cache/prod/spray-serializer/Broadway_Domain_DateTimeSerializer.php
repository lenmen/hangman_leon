<?php

namespace Broadway\Domain;

use Spray\Serializer\Object\BoundClosureSerializer;
use Spray\Serializer\SerializerInterface;

class DateTimeSerializer extends BoundClosureSerializer
{
    public function __construct()
    {
        parent::__construct('Broadway\Domain\DateTime');
    }
    
    protected function bindSerializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $data['dateTime'] = $subject->dateTime;
        };
    }
    
    protected function bindDeserializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $subject->dateTime = $data['dateTime'];
        };
    }
}
