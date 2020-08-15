<?php

namespace Designpatterns\Behavioral\Iterator;

/**
 * Here is the structure of PHP's Iterator interface :
 * 
 * abstract public current ( void ) : mixed
 * abstract public key ( void ) : scalar
 * abstract public next ( void ) : void
 * abstract public rewind ( void ) : void
 * abstract public valid ( void ) : bool
 */

class AlphabeticalIterator implements \Iterator {

    private $elements = array();
    private $position = 0;

    public function __construct(\IteratorAggregate $aggregate)
    {
        $elements = $aggregate->getElements();
        sort($elements);
        $this->elements = $elements;
    }

    public function current()
    {
        return $this->elements[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        ++$this->position;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function valid()
    {
        return isset($this->elements[$this->position]);
    }
}