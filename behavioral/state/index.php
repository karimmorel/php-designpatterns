<?php

// The State Design Pattern helps us to change an object's behaviour depending on it's state (using polymorphism)
// It also helps us to avoid long if and else statements for components where we will need to implement new states in the future (Open/Closed Principle)

/**
 * 
 * The State Design Pattern needs 3 elements : 
 * 
 *  The Context : It is the object that is going to have a different behaviour depending on it's state
 *  The State : It is an interface that is going to list the methods needed to be implemented by the Context
 *  The Concrete State : It is the class that is going to implement the State interface which is going to define the state of the context and so, it's behaviour
 */

Include 'Context.php';
Include 'State.php';
Include 'ConcreteStateA.php';
Include 'ConcreteStateB.php';

Use Designpatterns\Behavioral\State\Context;
Use Designpatterns\Behavioral\State\State;
Use Designpatterns\Behavioral\State\ConcreteStateA;
Use Designpatterns\Behavioral\State\ConcreteStateB;


$stateA = new ConcreteStateA;
$stateB = new ConcreteStateB;

// The execute method behaves differently depending on context's state;
$context = new Context($stateA);
$context->execute();

$context->setState($stateB);
$context->execute();