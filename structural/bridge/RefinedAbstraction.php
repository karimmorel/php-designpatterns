<?php

namespace Designpatterns\Structural\Bridge;

Use Designpatterns\Structural\Bridge\Abstraction;

class RefinedAbstraction extends Abstraction {

    public function read()
    {
        $this->implementation->enable(true);
        echo 'Refined play.<br/>';
    }
}
