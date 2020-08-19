<?php

namespace Designpatterns\Structural\Proxy;


Use Designpatterns\Structural\Proxy\ServiceInterface;

class Client {

    private $service;

    public function __construct(ServiceInterface $service)
    {
        $this->service = $service;
    }

    public function executeService()
    {
        $this->service->execute();
    }
}