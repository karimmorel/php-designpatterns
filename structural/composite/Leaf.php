<?php

namespace Designpatterns\Structural\Composite;


Use Designpatterns\Structural\Composite\Component;

class Leaf implements Component {

    private $name;

    public function __construct(String $name)
    {
        $this->name = $name;
    }

    public function execute()
    {
        echo 'I am executing this leaf : '.$this->name.'<br/>';
    }
}
