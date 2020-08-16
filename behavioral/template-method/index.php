<?php

// The Template Method Pattern allows us to force a behaviour for an operation. We will implement specific steps in the subclasses.

/** For this design pattern we only need two elements :
 * 
 *  An Abstract Class : Which is going to force the behaviour the subclasses will need to go through.
 *  A Concrete Class : Which is the class that is going to extend the Abstract Class and so the existing behaviour.
 */

 Include 'AbstractClass.php';
 Include 'ConcreteClass.php';

 Use Designpatterns\Behavioral\Templatemethod\ConcreteClass;

 $object = new ConcreteClass();
 $object->execute();