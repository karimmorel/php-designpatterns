<?php

// The Strategy Pattern allow us to pass different algorithms to an object from strategy objects
// For me, the strategy pattern is pretty similar to the state pattern.
// The main deffirence is, for me, in the philosophy of the implementation.

// The Strategy Pattern is useful to modify an overall algorithm depending on (several) strategy objects.
// The State Pattern helps us to make an object behaves differently depending on it's state.

/** So for this Pattern, you need 3 elements 
 * 
 *  The Context : The object that is going contain the overall algorithm
 *  The Strategy : The interface which is going to list the methods needed to be a Concrete Strategy --> You may have different Strategy interfaces that can be implemented in different part of the algorithm
 *  The Concrete Strategy : The object that is going to get the different parts of the algorithm and which is going to implement the Strategy interface
 */

Include 'Context.php';
Include 'FirstStrategy.php';
Include 'SecondStrategy.php';
Include 'ConcreteFirstStrategyA.php';
Include 'ConcreteFirstStrategyB.php';
Include 'ConcreteSecondStrategyA.php';
Include 'ConcreteSecondStrategyB.php';


Use Designpatterns\Behavioral\Strategy\Context;
Use Designpatterns\Behavioral\Strategy\ConcreteFirstStrategyA;
Use Designpatterns\Behavioral\Strategy\ConcreteFirstStrategyB;
Use Designpatterns\Behavioral\Strategy\ConcreteSecondStrategyA;
Use Designpatterns\Behavioral\Strategy\ConcreteSecondStrategyB;


// First I import the algorithm from the A Concrete Strategies
$firstStrategy = new ConcreteFirstStrategyA;
$secondStrategy = new ConcreteSecondStrategyA;
$context = new Context($firstStrategy, $secondStrategy);

$context->execute();


// Then I import the algorithm from the B Concrete Strategies
$firstStrategy = new ConcreteFirstStrategyB;
$secondStrategy = new ConcreteSecondStrategyB;
$context->setFirstStrategy($firstStrategy);
$context->setSecondStrategy($secondStrategy);

$context->execute();