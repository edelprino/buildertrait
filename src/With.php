<?php
namespace BuilderTrait;

trait With
{
    public function __call($method, $arguments)
    {
        $property = $this->extractPropertyName($method);
        if (property_exists($this, $property)) {
            $this->{$property} = $arguments[0];
            return $this;
        }
        throw Exception::propertyNotFound($property);
    }

    private function extractPropertyName($method)
    {
        return lcfirst(str_replace("with", "", $method));
    }
}

