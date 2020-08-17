<?php

namespace Designpatterns\Structural\Decorator;


Use Designpatterns\Structural\Decorator\Component;

class ConcreteComponent implements Component {

    public function execute()
    {
        echo 'Execute the concrete component\'s behaviour.<br/>';
    }
}
