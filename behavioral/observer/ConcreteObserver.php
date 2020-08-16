<?php

namespace Designpatterns\Behavioral\Observer;

Use Designpatterns\Behavioral\Observer\Observer;

class ConcreteObserver implements Observer {

    private $name;

    public function __construct(String $name)
    {
        $this->name = $name;
    }

    public function update()
    {
        echo 'The subject has been changed, let\'s update the observer : '.$this->name.'<br/>';
    }
}