<?php

// The Factory Method Design Pattern allows us to create a superclass to instatiates objects, but the subclasses of this superclass will overide it to change the type of the instanciated object

/**
 * To use the Factory Method Design Pattern, we need 4 elements : 
 * 
 *  The Creator : It is an abstract class that is going to instaciate a Concrete Product and will handle some business logic
 *  The Concrete Creator : It is a class which will extends the Creator abstract class, and will define the type of the Concrete Product Instaciated
 *  The Product : It is the interface which is going to list the methods needed by the Concrete Products
 *  The Concrete Product : The object used by the Creator
 */

 Include 'Creator.php';
 Include 'ConcreteCreatorA.php';
 Include 'ConcreteCreatorB.php';
 Include 'Product.php';
 Include 'ConcreteProductA.php';
 Include 'ConcreteProductB.php';

 Use Designpatterns\Creational\FactoryMethod\ConcreteCreatorA;
 Use Designpatterns\Creational\FactoryMethod\ConcreteCreatorB;

 $creatorA = new ConcreteCreatorA;
 $creatorA->handle();

 $creatorB = new ConcreteCreatorB;
 $creatorB->handle();