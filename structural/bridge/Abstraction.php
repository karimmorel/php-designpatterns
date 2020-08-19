<?php

namespace Designpatterns\Structural\Bridge;

Use Designpatterns\Structural\Bridge\Implementation;

class Abstraction {

    protected $implementation;

    public function __construct(Implementation $implementation)
    {
        $this->implementation = $implementation;
    }

    public function read()
    {
        $this->implementation->enable(true);
    }
}