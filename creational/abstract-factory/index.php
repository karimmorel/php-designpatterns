<?php

// The Abstract Factory Design Pattern allows us to produce famillies of objects without specifying their concrete class, it is useful when these famillies are made to grow in the future

/**
 * For this design pattern, we have to implement at least 4 elements : 
 * 
 *  An Abstract Factory : It is the interface which is going to list the methods needed to create the different types of objects in a familly of object
 *  A Concrete Factory : There can be several concrete factories in the Abstract Factory Design Pattern because each Concrete Factory represents one familly of object, and so the concrete factory implements the abstract factory, and it will create the different type of objects
 *  An Abstract  Product : It is the interface which will represents one element of the object familly, it will list the methods common to all these concrete products, no matter the familly
 *  A Concrete Product : There can be several concrete products because it represents one object within the family of object. It implements the Abstract Product interface and is the representation of one object in one familly of object.
 * 
 */

 Include 'AbstractFactory.php';
 Include 'ConcreteFactoryOne.php';
 Include 'ConcreteFactoryTwo.php';
 Include 'AbstractProductA.php';
 Include 'AbstractProductB.php';
 Include 'AbstractProductC.php';
 Include 'ConcreteProductOneA.php';
 Include 'ConcreteProductOneB.php';
 Include 'ConcreteProductOneC.php';
 Include 'ConcreteProductTwoA.php';
 Include 'ConcreteProductTwoB.php';
 Include 'ConcreteProductTwoC.php';

 Use Designpatterns\Creational\AbstractFactory\ConcreteFactoryOne;
 Use Designpatterns\Creational\AbstractFactory\ConcreteFactoryTwo;

 $factoryOne = new ConcreteFactoryOne;
 $productOneA = $factoryOne->createProductA();
 echo $productOneA->A();

 $productOneC = $factoryOne->createProductC();
 echo $productOneC->C();

 $factoryTwo = new ConcreteFactoryTwo;
 $productTwoB = $factoryTwo->createProductB();
 echo $productTwoB->B();