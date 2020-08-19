<?php

namespace Designpatterns\Structural\Bridge;


Use Designpatterns\Structural\Bridge\Abstraction;
Use Designpatterns\Structural\Bridge\ConcreteImplementation;

class Client {

    public function read()
    {
        $implementation = new ConcreteImplementation;
        $abstraction = new Abstraction($implementation);
        
        $abstraction->read();
    }

    public function refinedRead()
    {
        $implementation = new ConcreteImplementation;
        $abstraction = new RefinedAbstraction($implementation);
        
        $abstraction->read();
    }
}