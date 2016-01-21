<?php

namespace Broadway\Domain;

use Spray\Serializer\Object\BoundClosureSerializer;
use Spray\Serializer\SerializerInterface;

class MetadataSerializer extends BoundClosureSerializer
{
    public function __construct()
    {
        parent::__construct('Broadway\Domain\Metadata');
    }
    
    protected function bindSerializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $data['values'] = $subject->values;
        };
    }
    
    protected function bindDeserializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $subject->values = $data['values'];
        };
    }
}
