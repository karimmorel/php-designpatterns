<?php

namespace Designpatterns\Creational\FactoryMethod;


Use Designpatterns\Creational\FactoryMethod\Product;

abstract class Creator {

    public function handle()
    {
        echo 'Handling stuffs.<br/>';

        $product = $this->createProduct();
        $product->doStuff();
    }

    abstract public function createProduct() : Product;
}