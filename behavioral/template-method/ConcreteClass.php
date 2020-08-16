<?php

namespace Designpatterns\Behavioral\Templatemethod;

Use Designpatterns\Behavioral\Templatemethod\AbstractClass;

class ConcreteClass extends AbstractClass {

    protected function doExecute()
    {
        echo 'I also want to implement some behaviour in the subclass.';
    }
}