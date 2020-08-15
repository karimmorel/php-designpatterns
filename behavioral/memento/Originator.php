<?php

namespace Designpatterns\Behavioral\Memento;

Use Designpatterns\Behavioral\Memento\Memento;

class Originator {

    private $name;

    public function __construct(String $name)
    {
        $this->name = $name;
    }

    public function createState()
    {
        return new Memento($this->name);
    }

    public function restore(Memento $state)
    {
        $this->name = $state->getName();
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }
}