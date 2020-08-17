<?php

// The Adaptee doesn't have the method export() requested by the Target interface :(

namespace Designpatterns\Structural\Adapter;


class Adaptee {

    public function executeAnything(String $value)
    {
        echo 'Here I execute what I want : '.$value.'<br/>';
    }
}
