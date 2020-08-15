<?php

namespace Designpatterns\Behavioral\State;

Use Designpatterns\Behavioral\State\State;

class ConcreteStateA implements State{
    public function execute()
    {
        echo 'I am ConcreteStateA <br/>';
    }
}