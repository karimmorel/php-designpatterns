<?php

// The Iterator Design Pattern Allows us to go through a collection of objects without having to care about it's internal structure
// PHP already provides two interfaces to help us : Iterator and IteratorAggregate (since PHP 5)

/**
 * 
 * So in PHP, we will only need to create two elements which are going to implement these interfaces :
 * 
 *  The Concrete Iteartor : It is the object that is going to go through a structure (object, collection, list)
 *  The Concrete Aggregate : It is a collection that is going to depend on one or several Iterators to go through it's structure
 */

 Include 'ConcreteAggregate.php';
 Include 'ConcreteIterator.php';
 Include 'AlphabeticalIterator.php';

 Use Designpatterns\Behavioral\Iterator\ConcreteAggregate;
 Use Designpatterns\Behavioral\Iterator\ConcreteIterator;
 Use Designpatterns\Behavioral\Iterator\AlphabeticalIterator;

 $aggregate = new ConcreteAggregate();

 $aggregate->addElement('Cat');
 $aggregate->addElement('Dog');
 $aggregate->addElement('Rabbit');

 // By default, when you loop on an object which is implementing the \IteratorAggregate interface, it will call the getIterator() method
 foreach($aggregate as $key => $value)
 {
     echo $value.'<br/>';
 }

 $aggregate->addElement('Snake');
 $aggregate->addElement('Bee');
 $aggregate->addElement('Horse');


 foreach($aggregate->getAlphabeticalIterator() as $key => $value)
 {
     echo $value.'<br/>';
 }