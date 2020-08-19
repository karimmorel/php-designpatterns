<?php

namespace Designpatterns\Structural\Flyweight;

Use Designpatterns\Structural\Flyweight\Context;
Use Designpatterns\Structural\Flyweight\FlyweightFactory;

class Client {

    private $contexts = array();
    private $factory;

    public function __construct(FlyweightFactory $factory)
    {
        $this->factory = $factory;
    }

    public function createNewContext($extrinsicState, $intrinsicState)
    {
        $this->contexts[] = new Context($extrinsicState, $intrinsicState, $this->factory);
    }

    public function getContexts()
    {
        return $this->contexts;
    }
}