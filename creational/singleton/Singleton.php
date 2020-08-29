<?php

namespace Designpatterns\Creational\Singleton;


class Singleton {
    public $title = 'Singleton\'s name';

    static private $instance;

    static public function getInstance() : Singleton 
    {
        if(!self::$instance)
        {
            self::$instance = new Singleton;
        }

        return self::$instance;
    }
}