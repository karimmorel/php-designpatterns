<?php

// The Bridge Design Pattern allows us to separate a great set of classes by two hierarchies, abstractions and implementations (it creates a bridge between them)

/**
 * We need 4 elements, and one more is optional
 * 
 *  The Client : An object which usually going to depend on an abstraction to link with an implementation
 *  The Abstraction : It provides high-level behaviour and depends on implementations to do the low-level labor
 *  The Refind Abstraction (optional) : It is extending the abstraction and will provides some more behaviours
 *  The Implementation : The Interface that is listing the methods required to be used bu the abstractions
 *  The Concrete Implementation : It contain the specific code of it's component and implements the implementation class
 * 
 */

 Include 'Client.php';
 Include 'Abstraction.php';
 Include 'RefinedAbstraction.php';
 Include 'Implementation.php';
 Include 'ConcreteImplementation.php';

 Use Designpatterns\Structural\Bridge\Client;

$client = new Client;
$client->read();

$client->refinedRead();