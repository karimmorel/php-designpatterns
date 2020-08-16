<?php

namespace Designpatterns\Behavioral\Command;


Use Designpatterns\Behavioral\Command\Command;
Use Designpatterns\Behavioral\Command\Receiver;

class ConcreteCommand implements Command {

    protected $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->operation();
    }
}