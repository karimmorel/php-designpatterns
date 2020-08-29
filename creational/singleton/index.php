<?php

// The Signleton Design pattern provides us a solution to avoid having multiple instances of a class
// We have only one instance of a class which is globally provided to our component

/**
 * To implement this pattern, we only need one element :
 * 
 *  The Singleton : It will have a composition on himself, so everytime we will ask to get an instance of this class, it will return the same instance every time
 */

 Include 'Singleton.php';

 Use Designpatterns\Creational\Singleton\Singleton;

 $singleton = Singleton::getInstance();

 echo $singleton->title;