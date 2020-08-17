<?php

namespace Designpatterns\Behavioral\Chainofresponsibility;


Use Designpatterns\Behavioral\Chainofresponsibility\Handler;

class ConcreteHandler extends Handler{
    private $name;

    public function __construct(?Handler $handler, String $name)
    {
        parent::__construct($handler);
        $this->name = $name;
    }

    protected function doExecute()
    {
        echo 'I execute this Handler, and it\'s name is : '.$this->name.'<br/>';
    }
}
