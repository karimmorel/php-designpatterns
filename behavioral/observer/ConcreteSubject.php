<?php

namespace Designpatterns\Behavioral\Observer;

Use Designpatterns\Behavioral\Observer\Subject;

class ConcreteSubject extends Subject {

    private $title;

    public function __construct(String $title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(String $value)
    {
        $this->title = $title;
        $this->notify();

        return $this;
    }
}