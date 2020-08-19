<?php

namespace Designpatterns\Structural\Flyweight;

class Flyweight {

    private $intrinsicState;

    public function __construct (String $intrinsicState)
    {
        $this->intrinsicState = $intrinsicState;
    }

    public function getIntrinsicState()
    {
        return $this->intrinsicState;
    }
}