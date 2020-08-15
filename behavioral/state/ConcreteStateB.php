<?php

namespace Designpatterns\Behavioral\State;

Use Designpatterns\Behavioral\State\State;

class ConcreteStateB implements State{
    public function execute()
    {
        echo 'I am ConcreteStateB <br/>';
    }
}