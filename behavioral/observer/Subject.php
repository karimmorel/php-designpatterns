<?php

namespace Designpatterns\Behavioral\Observer;

Use Designpatterns\Behavioral\Observer\Observer;

abstract class Subject {

    private $observers = array();

    public function attach(Observer $observer)
    {
        $key = array_search($observer, $this->observers);

        if(!$key)
        {
            $this->observers[] = $observer;
        }
    }

    public function detach(Observer $observer)
    {
        $key = array_search($observer, $this->observers);

        if($key)
        {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        foreach($this->observers as $observer)
        {
            $observer->update();
        }
    }
}