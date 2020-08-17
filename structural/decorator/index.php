<?php

// The Decorator Design Pattern allows us to add behavior to an object dynamically

/**
 * For this pattern, we need 3 elements :
 * 
 *  The Component : The interface which is going to link the Concrete Component and the Decorator
 *  The Concrete Component : The object on which we are adding behaviour
 *  The Decorator : The object which is going to add behaviour to the concrete component
 */

 Include 'Component.php';
 Include 'ConcreteComponent.php';
 Include 'Decorator.php';

 Use Designpatterns\Structural\Decorator\ConcreteComponent;
 Use Designpatterns\Structural\Decorator\Decorator;

 $component =  new ConcreteComponent;

 $component->execute();

 $decorator = new Decorator($component);

 $decorator->execute();