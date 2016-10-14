# BuilderTrait (WIP) [![Build Status](https://travis-ci.org/edelprino/buildertrait.svg?branch=master)](https://travis-ci.org/edelprino/buildertrait)

If you want to create a builder but you don't want to duplicate or write `with...` methods.
`BuilderTrait\With` create automatically `with...` method based on property of the builder object.

## Example
```php
class AnObjectBuilder
{
    use With;

    private $foo;

    public function buildAnObject()
    {
        return new AnObject($this->foo);
    }
}

$builder = new AnObjectBuilder();
$anObject = $builder->withFoo('bar')->buildAnObject();
```

##TODO
- [x] `With` trait for add `with...` methods based on builder properties
- [ ] `Build` trait for create `build` method based on getter/setter of object to create


## Install
```bash
composer require edelprino/buildertrait
```

## Resources on Builder pattern
* https://en.wikipedia.org/wiki/Builder_pattern

## Follow me on
* [Twitter](http://twitter.com/edelprino)
* [GitHub](https://github.com/edelprino)
