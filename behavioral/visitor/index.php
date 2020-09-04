<?php

// The Visitor Design Pattern allows us to separate an algorithm from the object it actually operates on

/**
 * For this structure, we need 3 elements :
 * 
 *  The Element : It is the interface of the element on which we want to add some behaviour
 *  The Concrete Element : The class which is going to implement the Element interface
 *  The Visitor : the object with which you will add behaviour
 */

 Include 'Element.php';
 Include 'ConcreteElement.php';
 Include 'OtherConcreteElement.php';
 Include 'Visitor.php';
 Include 'ConcreteVisitor.php';

Use Designpatterns\Behavioral\Visitor\ConcreteVisitor;
Use Designpatterns\Behavioral\Visitor\ConcreteElement;
Use Designpatterns\Behavioral\Visitor\OtherConcreteElement;

$visitor = new ConcreteVisitor;
$element = new ConcreteElement;
$otherElement = new OtherConcreteElement;

$element->accept($visitor);
$otherElement->accept($visitor);
 