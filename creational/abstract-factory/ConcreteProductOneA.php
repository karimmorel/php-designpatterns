<?php

namespace Designpatterns\Creational\AbstractFactory;

Use Designpatterns\Creational\AbstractFactory\AbstractProductA;

class ConcreteProductOneA implements AbstractProductA {
    public function A ()
    {
        return 'I am a product with the type A from the familly One.<br/>';
    }
}