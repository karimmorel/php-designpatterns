<?php

namespace Designpatterns\Structural\Decorator;


Use Designpatterns\Structural\Decorator\Component;

class Decorator implements Component {

    private $decorated;

    public function __construct(Component $component)
    {
        $this->decorated = $component;
    }

    public function execute()
    {
        echo 'Decorating with a new behaviour.<br/>';
        $this->decorated->execute();
    }
}
