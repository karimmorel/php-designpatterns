<?php

namespace Designpatterns\Structural\Adapter;


Use Designpatterns\Structural\Adapter\Target;
Use Designpatterns\Structural\Adapter\Adaptee;

class Adapter implements Target {

    private $service;

    public function __construct()
    {
        $this->service = new Adaptee;
    }

    public function export()
    {
        $this->service->executeAnything('Hi, I am the Adapter Class');
    }
}