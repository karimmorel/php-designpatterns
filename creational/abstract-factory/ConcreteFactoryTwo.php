<?php

namespace Designpatterns\Creational\AbstractFactory;


Use Designpatterns\Creational\AbstractFactory\AbstractFactory;
Use Designpatterns\Creational\AbstractFactory\AbstractProductA;
Use Designpatterns\Creational\AbstractFactory\AbstractProductB;
Use Designpatterns\Creational\AbstractFactory\AbstractProductC;
Use Designpatterns\Creational\AbstractFactory\ConcreteProductTwoA;
Use Designpatterns\Creational\AbstractFactory\ConcreteProductTwoB;
Use Designpatterns\Creational\AbstractFactory\ConcreteProductTwoC;

class ConcreteFactoryTwo implements AbstractFactory {

    public function createProductA() : AbstractProductA
    {
        return new ConcreteProductTwoA;
    }

    public function createProductB() : AbstractProductB
    {
        return new ConcreteProductTwoB;
    }

    public function createProductC() : AbstractProductC
    {
        return new ConcreteProductTwoC;
    }
}