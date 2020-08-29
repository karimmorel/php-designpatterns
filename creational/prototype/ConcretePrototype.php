<?php

namespace Designpatterns\Creational\Prototype;


Use Designpatterns\Creational\Prototype\Prototype;

class ConcretePrototype implements Prototype {
    private $title;

    public function __construct(?String $title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(String $title)
    {
        $this->title = $title;
        return $this;
    }

    public function clone()
    {
        echo 'Cloning an object.<br/>';
        $new = new self($this->title);
        return $new;
    }
}