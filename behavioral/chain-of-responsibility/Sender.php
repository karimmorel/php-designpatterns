<?php

namespace Designpatterns\Behavioral\Chainofresponsibility;

Use Designpatterns\Behavioral\Chainofresponsibility\Handler;

class Sender {
    private $handler;

    public function __construct(Handler $handler)
    {
        $this->handler = $handler;
    }

    public function sendRequest()
    {
        $this->handler->execute();
    }
}
