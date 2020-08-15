<?php

namespace Designpatterns\Behavioral\Strategy;

Use Designpatterns\Behavioral\Strategy\FirstStrategy;

class ConcreteFirstStrategyA implements FirstStrategy {

    public function apply()
    {
        echo 'I apply the concrete first strategy A.<br/>';
    }
}