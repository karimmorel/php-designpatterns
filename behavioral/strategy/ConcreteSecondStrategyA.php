<?php

namespace Designpatterns\Behavioral\Strategy;

Use Designpatterns\Behavioral\Strategy\SecondStrategy;

class ConcreteSecondStrategyA implements SecondStrategy {

    public function execute()
    {
        echo 'I apply the concrete second strategy A.<br/>';
    }
}