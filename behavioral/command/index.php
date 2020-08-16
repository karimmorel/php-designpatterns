<?php

// The Command Design Pattern allows use to decouple a sender object from a receiver object.
// The Sender will send a command to the receiver and these commands may be undone and/or persisted

/**
 * To implement the command design pattern, we need at least 4 elements :
 * 
 *  The Invoker : It is the object that will send a command object
 *  The Command : It is the interface that will set the different command classes
 *  The ConcreteCommand : The class that is implementing the Command interface and that will be sent to the receiver, it will call the receiver's execute method 
 *  The Receiver : It will bundle the behaviour to be executed by the command object
 */

 Include 'Invoker.php';
 Include 'Command.php';
 Include 'ConcreteCommand.php';
 Include 'Receiver.php';

 Use Designpatterns\Behavioral\Command\Invoker;
 Use Designpatterns\Behavioral\Command\ConcreteCommand;
 Use Designpatterns\Behavioral\Command\Receiver;

 $receiver = new Receiver;
 $command = new ConcreteCommand($receiver);
 $invoker = new Invoker($command);

 $invoker->operation();