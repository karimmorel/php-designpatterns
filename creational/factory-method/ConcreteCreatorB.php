<?php

namespace Designpatterns\Creational\FactoryMethod;


Use Designpatterns\Creational\FactoryMethod\Creator;
Use Designpatterns\Creational\FactoryMethod\Product;
Use Designpatterns\Creational\FactoryMethod\ConcreteProductB;

class ConcreteCreatorB extends Creator {

    public function createProduct() : Product
    {
        return new ConcreteProductB;
    }
}