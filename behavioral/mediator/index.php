<?php

// The Mediator Design Pattern allows us to bundle the communication between some objects in a Mediator object

/**
 * In order to implement this pattern, we will need 4 elements:
 * 
 *  The Colleague : An interface that is going to list the methods need to use a Mediator object the right way --> It will be composed by a Mediator object
 *  The Mediator : An abstract class that the Colleagues will use to communicate between them
 *  The Concrete Colleague : An object which is implementing the Colleague class
 *  The Concrete Mediator : An object which is going to extend the Mediator abstract class --> It will be composed by a list of concrete colleagues object
 */

 Include 'Mediator.php';
 Include 'ConcreteMediator.php';
 Include 'Colleague.php';
 Include 'ConcreteColleague.php';
 Include 'OtherConcreteColleague.php';

 Use Designpatterns\Behavioral\Mediator\ConcreteMediator;

 $mediator = new ConcreteMediator;

 $mediator->getColleague()->change();
 $mediator->getOtherColleague()->change();