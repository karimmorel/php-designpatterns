<?php

// The Adapter Design pattern helps us to use an incompatible interface with a given object

/**
 * To implement it, there is four elements:
 * 
 *  The Client : It is requesting for a Target Type Object
 *  The Target : The interface which is incompatible with the object we want to use
 *  The Adaptee : The object we want to use with this interface
 *  The Adapter : The object which is going to connect the Adaptee to the Target
 */

 Include 'Target.php';
 Include 'Adapter.php';
 Include 'Adaptee.php';
 Include 'Client.php';

 Use Designpatterns\Structural\Adapter\Client;
 Use Designpatterns\Structural\Adapter\Adapter;

 $adapter = new Adapter;
 $client = new Client($adapter);
 $client->execute();