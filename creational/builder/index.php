<?php

// The Builder Design Pattern allows us to create complex objects step by step and allow us to construct different type or representation of an object using the same construction code

/**
 * For this design pattern, we need 4 elements :
 * 
 *  The Builder : It is the interface which is going to list the methods needed to create the product object needed
 *  The Concrete Builder : It is the class which is going to create the complexe object, by implementing methods which are going to manage the object's configuration and values
 *  The Product : The complexe object created
 *  The Director : This element is not mandatory, but it helps us to create some presets to facilitate the construction of most used objects configuration 
 */

Include 'Builder.php';
Include 'ConcreteBuilder.php';
Include 'Director.php';
Include 'Product.php';

Use Designpatterns\Creational\Builder\ConcreteBuilder;
Use Designpatterns\Creational\Builder\Product;
Use Designpatterns\Creational\Builder\Director;

$director = new Director;
$builder = new ConcreteBuilder;

$builder->addTitle('My favorite product')
->addDescription('My favorite product is really this one')
->addAuthor('Myself');

$director->createFavoriteProduct($builder);

$product = $builder->create();

$product->execute();