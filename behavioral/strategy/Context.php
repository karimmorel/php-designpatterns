<?php

namespace Designpatterns\Behavioral\Strategy;

Use Designpatterns\Behavioral\Strategy\FirstStrategy;
Use Designpatterns\Behavioral\Strategy\SecondStrategy;

class Context {

    private $firstStrategy;
    private $secondStrategy;

    public function __construct(FirstStrategy $firstStrategy, SecondStrategy $secondStrategy)
    {
        $this->firstStrategy = $firstStrategy;
        $this->secondStrategy = $secondStrategy;
    }

    public function setFirstStrategy(FirstStrategy $strategy)
    {
        $this->firstStrategy = $strategy;
    }

    public function setSecondStrategy(SecondStrategy $strategy)
    {
        $this->secondStrategy = $strategy;
    }

    public function execute()
    {
        $this->firstStrategy->apply();
        $this->secondStrategy->execute();
    }
}