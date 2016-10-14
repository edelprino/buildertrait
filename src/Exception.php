<?php
namespace BuilderTrait;

class Exception extends \Exception
{
    public static function propertyNotFound($property)
    {
        return new self("Property: $property not found");
    }
}
