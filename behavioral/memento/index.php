<?php

// The Memento Design Pattern provides a solution to implement an undo feature

/**
 * 
 * It is composed by three elements : 
 * 
 *  The Originator : it is the element on which we want to implement the undo feature
 *  The Memento : it is a representation of this element at a previous state
 *  And the Caretaker : it is the class that is going to handle the different states of the originator by saving them and returning them when requested
 */

 include 'Originator.php';
 include 'Memento.php';
 include 'Caretaker.php';

 Use Designpatterns\Behavioral\Memento\Originator;
 Use Designpatterns\Behavioral\Memento\Memento;
 Use Designpatterns\Behavioral\Memento\Caretaker;

 // Here, we create an originator, and everytime we change his name, we create a new state of it (a new Memento) and we store it in the Caretaker

 $originator = new Originator('Dragon');
 $history = new Caretaker;
 $state = $originator->createState();
 $history->push($state);

 $originator->setName('yes');
 $state = $originator->createState();
 $history->push($state);

 $originator->setName('no');
 $state = $originator->createState();
 $history->push($state);

 $originator->setName('oui');
 $state = $originator->createState();
 $history->push($state);

 $originator->setName('yo');
 $state = $originator->createState();
 $history->push($state);

 // With the Caretaker we go some states earlier

$lastState = $history->pop();
var_dump($lastState->getName());

$lastState = $history->pop();
var_dump($lastState->getName());

$lastState = $history->pop();
var_dump($lastState->getName());

// And then we restore this state to our originator

var_dump($originator->getName());
$originator->restore($lastState);
var_dump($originator->getName());