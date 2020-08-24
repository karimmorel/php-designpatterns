<?php

namespace Designpatterns\Creational\AbstractFactory;

Use Designpatterns\Creational\AbstractFactory\AbstractProductB;

class ConcreteProductTwoB implements AbstractProductB {
    public function B ()
    {
        return 'I am a product with the type B from the familly Two.<br/>';
    }
}