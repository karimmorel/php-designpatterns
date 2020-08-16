<?php

namespace Designpatterns\Behavioral\Command;

Use Designpatterns\Behavioral\Command\Command;

class Invoker {
    private $command;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function operation()
    {
        $this->command->execute();
    }
}