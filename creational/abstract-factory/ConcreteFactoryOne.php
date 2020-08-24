<?php

namespace Designpatterns\Creational\AbstractFactory;


Use Designpatterns\Creational\AbstractFactory\AbstractFactory;
Use Designpatterns\Creational\AbstractFactory\AbstractProductA;
Use Designpatterns\Creational\AbstractFactory\AbstractProductB;
Use Designpatterns\Creational\AbstractFactory\AbstractProductC;
Use Designpatterns\Creational\AbstractFactory\ConcreteProductOneA;
Use Designpatterns\Creational\AbstractFactory\ConcreteProductOneB;
Use Designpatterns\Creational\AbstractFactory\ConcreteProductOneC;

class ConcreteFactoryOne implements AbstractFactory {

    public function createProductA() : AbstractProductA
    {
        return new ConcreteProductOneA;
    }

    public function createProductB() : AbstractProductB
    {
        return new ConcreteProductOneB;
    }

    public function createProductC() : AbstractProductC
    {
        return new ConcreteProductOneC;
    }
}