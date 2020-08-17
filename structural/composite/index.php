<?php

// The Composite Design Pattern allows us to create a tree of object where the structure can be used as an individual object

/**
 * In order to use the Composite Design Pattern, we need 3 elements :
 * 
 * The Component : The interface which is going to group all the methods needed to be an element of the tree
 * The Leaf : It is a basic element of the tree, which is not going to have sub-elements.
 * The Composite : A complexe object that can behave like a leaf, but can also contain other sub-elements (leaves or other composites) of the tree.
 * 
 */

 Include 'Component.php';
 Include 'Composite.php';
 Include 'Leaf.php';

 Use Designpatterns\Structural\Composite\Composite;
 Use Designpatterns\Structural\Composite\Leaf;


 // Creating leaves
 $leaf1 = new Leaf('A');
 $leaf2 = new Leaf('B');
 $leaf3 = new Leaf('C');
 $leaf4 = new Leaf('D');

 // Creating composites
 $composite1 = new Composite($leaf1);
 $composite2 = new Composite(null);
 $composite3 = new Composite($leaf3);
 $composite4 = new Composite(null);

 // Hydrating my tree :)
 $composite1->addComponent($composite2);
 $composite2->addComponent($composite4);
 $composite4->addComponent($leaf2);
 $composite4->addComponent($leaf4);
 $composite4->addComponent($composite3);


 $composite1->execute();

 