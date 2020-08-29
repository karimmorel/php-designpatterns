<?php

// The Prototype Design Pattern allows cloning objects without coupling to their specific class
// PHP already provide this pattern outside of the classes : the "clone" method allows us to duplicate an object without knowing all it's structure
// We can add some behaviour when cloning an object when cloning an object by implementing the public method __clone

/**
 * To Implement this Design pattern, we only need two elements : 
 * 
 *  The Prototype : The interface which is forcing to implement the clone method in the class
 *  The Concrete Prototype : The class implementing the Prototype Interface --> The object we need to clone
 */

Include 'Prototype.php';
Include 'ConcretePrototype.php';


Use Designpatterns\Creational\Prototype\ConcretePrototype;

$prototype = new ConcretePrototype('Prototype 1');
echo $prototype->getTitle().'<br/>';

$clone = $prototype->clone();
echo $clone->getTitle().'<br/>';
