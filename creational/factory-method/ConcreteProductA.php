<?php

namespace Designpatterns\Creational\FactoryMethod;


Use Designpatterns\Creational\FactoryMethod\Product;

class ConcreteProductA implements Product {

    public function doStuff()
    {
        echo 'I am the A concrete product.<br/>';
    }
}