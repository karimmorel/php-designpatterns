<?php

namespace Designpatterns\Structural\Adapter;


Use Designpatterns\Structural\Adapter\Target;

class Client {

    private $target;

    public function __construct(Target $target)
    {
        $this->target = $target;
    }

    public function execute()
    {
        $this->target->export();
    }
}
