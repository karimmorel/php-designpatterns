<?php

namespace Designpatterns\Behavioral\Memento;

Use Designpatterns\Behavioral\Memento\Memento;

class Caretaker {

    private $states = array();

    public function push(Memento $memento)
    {
        $this->states[] = $memento;
    }

    public function pop()
    {
        $last = count($this->states) - 1;
        $lastState = $this->states[$last];
        unset($this->states[$last]);

        return $lastState;
    }
}