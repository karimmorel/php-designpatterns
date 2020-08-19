<?php

namespace Designpatterns\Structural\Flyweight;


Use Designpatterns\Structural\Flyweight\Flyweight;
Use Designpatterns\Structural\Flyweight\FlyweightFactory;

class Context {

    private $intrinsicState;
    private $extrinsicState;
    private $flyweightFactory;

    public function __construct(String $extrinsicState, String $intrinsicState, $factory)
    {
        $this->extrinsicState = $extrinsicState;
        $this->intrinsicState = $factory->getFlyweight($intrinsicState);
    }

    public function getExtrinsicState()
    {
        return $this->extrinsicState;
    }

    public function getIntrinsicState()
    {
        return $this->intrinsicState->getIntrinsicState();
    }
}