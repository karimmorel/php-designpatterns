<?php

namespace Designpatterns\Structural\Proxy;

Use Designpatterns\Structural\Proxy\ServiceInterface;
Use Designpatterns\Structural\Proxy\Service;

class Proxy implements ServiceInterface {

    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function execute()
    {
        echo 'Adding behaviour before service execution.<br/>';
        $this->service->execute();
        echo 'Adding behaviour after service execution.<br/>';
    }
}