<?php

namespace Designpatterns\Creational\FactoryMethod;


Use Designpatterns\Creational\FactoryMethod\Product;

class ConcreteProductB implements Product {

    public function doStuff()
    {
        echo 'I am the B concrete product.<br/>';
    }
}