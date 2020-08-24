<?php

namespace Designpatterns\Creational\AbstractFactory;

Use Designpatterns\Creational\AbstractFactory\AbstractProductA;
Use Designpatterns\Creational\AbstractFactory\AbstractProductB;
Use Designpatterns\Creational\AbstractFactory\AbstractProductC;

interface AbstractFactory {
    public function createProductA() : AbstractProductA;
    public function createProductB() : AbstractProductB;
    public function createProductC() : AbstractProductC;
}