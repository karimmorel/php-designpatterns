<?php

namespace Designpatterns\Creational\AbstractFactory;

Use Designpatterns\Creational\AbstractFactory\AbstractProductC;

class ConcreteProductTwoC implements AbstractProductC {
    public function C ()
    {
        return 'I am a product with the type C from the familly Two.<br/>';
    }
}