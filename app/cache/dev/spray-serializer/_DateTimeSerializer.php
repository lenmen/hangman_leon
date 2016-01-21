<?php


use Spray\Serializer\Object\BoundClosureSerializer;
use Spray\Serializer\SerializerInterface;

class DateTimeSerializer extends BoundClosureSerializer
{
    public function __construct()
    {
        parent::__construct('DateTime');
    }
    
    protected function bindSerializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
        };
    }
    
    protected function bindDeserializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
        };
    }
}
