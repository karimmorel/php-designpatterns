<?php

namespace Designpatterns\Behavioral\Strategy;

Use Designpatterns\Behavioral\Strategy\SecondStrategy;

class ConcreteSecondStrategyB implements SecondStrategy {

    public function execute()
    {
        echo 'I apply the concrete second strategy B.<br/>';
    }
}