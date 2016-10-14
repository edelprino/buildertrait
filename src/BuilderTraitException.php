<?php

class BuilderTraitException extends \Exception
{
    public static function propertyNotFound($property)
    {
        return new BuilderTraitException("Property: $property not found");
    }
}
