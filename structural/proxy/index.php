<?php

// The Proxy Design Pattern provides a substitute to an object by implementing the same interface and using the methods of this object
// By isoing this pattern, we can add behaviour before and/or after the execution of these methods

/**
 * To implement the Prooxy Design Pattern, we need 4 elements :
 * 
 *  The Client : The object which is going to call a service
 *  The ServiceInterface : The interface implemented by the service
 *  The Service : The object the client calls usually
 *  The Proxy : The substitute to this Service we are going to provide
 */

 Include 'Client.php';
 Include 'ServiceInterface.php';
 Include 'Service.php';
 Include 'Proxy.php';

 Use Designpatterns\Structural\Proxy\Client;
 Use Designpatterns\Structural\Proxy\Service;
 Use Designpatterns\Structural\Proxy\Proxy;


 $service = new Service;
 $proxy = new Proxy($service);
 $client = new Client($proxy);

 $client->executeService();