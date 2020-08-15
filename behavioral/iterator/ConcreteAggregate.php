<?php

namespace Designpatterns\Behavioral\Iterator;

Use Designpatterns\Behavioral\Iterator\ConcreteIterator;
Use Designpatterns\Behavioral\Iterator\AlphabeticalIterator;

/**
 * Here is the structure of PHP's IteratorAggregate interface :
 *
 * abstract public getIterator ( void ) : Traversable
 */

class ConcreteAggregate implements \IteratorAggregate {

    private $elements = array();


    public function addElement($element)
    {
        $this->elements[] = $element;
    }

    public function getElements()
    {
        return $this->elements;
    }

    public function getIterator()
    {
        return new ConcreteIterator($this);
    }

    public function getAlphabeticalIterator()
    {
        return new AlphabeticalIterator($this);
    }
}