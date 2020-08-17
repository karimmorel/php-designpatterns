<?php

namespace Designpatterns\Behavioral\Chainofresponsibility;

abstract class Handler{

    protected $next;

    public function __construct(?Handler $handler)
    {
        $this->next = $handler;
    }

    public function execute()
    {
        $this->doExecute();

        if(isset($this->next))
        {
            $this->next->execute();
        }
    }

    public function setNext(Handler $next)
    {
        $this->next = $next;
    }

    abstract protected function doExecute();
}