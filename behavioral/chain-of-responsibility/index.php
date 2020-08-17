<?php

// The Chain of Responsibility Design Patterns will build a chain of objects to process a request

/**
 * To implement this pattern, we need at least 3 elements :
 * 
 *  The Sender : The object that will send the request
 *  The Handler : It is an abstract class, which is going to be composed by itself, this attribute will be the next handler to call in the process
 *  The Concrete Handler : The object which is going to extend the Handler abstract class, and which we are doing one step of the process
 * 
 */

 namespace Designpatterns\Behavioral\Chainofresponsibility;

 Include 'Sender.php';
 Include 'Handler.php';
 Include 'ConcreteHandler.php';


 Use Designpatterns\Behavioral\Chainofresponsibility\Sender;
 Use Designpatterns\Behavioral\Chainofresponsibility\ConcreteHandler;

 $sender = new Sender($handler = new ConcreteHandler($nextHandler = new ConcreteHandler(null, 'B'), 'A'));

 $sender->sendRequest();

 $nextHandler->setNext(new ConcreteHandler(null, 'C'));

 $sender->sendRequest();
