<?php

// The Flyweight Design Pattern allows us to save RAM by seperating the intrinsic state of an object and the extrinsic state.
// Using this process will save RAM when you use a huge amount of instances of a class, and when the intrinsic part is particularly heavy in data (priste, image, ressource).

/**
 * To use this pattern, we need 4 elements :
 * 
 *  The Client : The object which is going to need a huge amount of instances of the Context class
 *  The Context : It it the object which is going to be instanciated multiple times and which will need a Flyweight to store it's intrinsic part
 *  The FlyweightFactory : It manages and creates the flyweight objects
 *  The Flyweight : The object that is saving the intrinsic part and we are going to share wit the Context
 */

Use Designpatterns\Structural\Flyweight\Client;
Use Designpatterns\Structural\Flyweight\Context;
Use Designpatterns\Structural\Flyweight\FlyweightFactory;
Use Designpatterns\Structural\Flyweight\Flyweight;

Include 'Client.php';
Include 'Context.php';
Include 'FlyweightFactory.php';
Include 'Flyweight.php';

$factory = new FlyweightFactory;
$client = new Client($factory);

$client->createNewContext('Cat', 'Animal');
$client->createNewContext('Cow', 'Animal');
$client->createNewContext('Dog', 'Animal');
$client->createNewContext('Car', 'Vehicle');
$client->createNewContext('Bicycle', 'Vehicle');
$client->createNewContext('Horse', 'Animal');
$client->createNewContext('Plane', 'Vehicle');
$client->createNewContext('Cat', 'Animal');

foreach ($client->getContexts() as $context)
{
    echo 'Intrinsic part : '.$context->getIntrinsicState().' / Extrinsic part : '.$context->getExtrinsicState().'<br/>';
}

// How much objects are persisting the intrinsic part ?
foreach ($factory->getFlyweights() as $key => $flyweight)
{
    echo $key.'<br/>';
}

echo count($factory->getFlyweights());