<?php

namespace Designpatterns\Behavioral\State;

Use Designpatterns\Behavioral\State\State;

class Context {
    private $state; // Composition

    public function __construct(State $state)
    {
        $this->state = $state;
    }

    public function execute()
    {
        // Just calling the objects executes method instead of doing if statements to know what behaviour we need
        $this->state->execute();
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState(State $state)
    {
        $this->state = $state;
        return $this;
    }
}