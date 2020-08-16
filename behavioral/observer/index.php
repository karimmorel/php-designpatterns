<?php

// The Observer Design Pattern is allowing us to notify some oberver objects when a subject object is modified or when it's state change.

/**
 * To implement this pattern, we need 2 abstract structures and 2 classes
 * 
 * The Subject : An Abstract class that will implement the notifing method, but also the methods that will manage the different observers to notify
 * The Concrete Subject : The class which is going to extend the subject abstract class, and which is going to notify the observers when it state changes.
 * The Observer : The interface that will implement the update methods to call when the observers will be notified
 * The Concrete Observer : It will implement the Observer interface, and will be notified of the subject's changes.
 * 
 */

 Include 'Subject.php';
 Include 'ConcreteSubject.php';
 Include 'Observer.php';
 Include 'ConcreteObserver.php';

 Use Designpatterns\Behavioral\Observer\ConcreteSubject;
 Use Designpatterns\Behavioral\Observer\ConcreteObserver;


 $subject = new ConcreteSubject('Subject');

 $observerA = new ConcreteObserver('A');
 $observerB = new ConcreteObserver('B');
 $observerC = new ConcreteObserver('C');

 $subject->attach($observerA);
 $subject->attach($observerB);
 $subject->attach($observerC);

 $subject->setTitle('Change title');

 // Notify only one time
 $subject->detach($observerB);
 $subject->attach($observerC);
 $subject->attach($observerC);
 $subject->attach($observerC);

 $subject->setTitle('Change another time');
 