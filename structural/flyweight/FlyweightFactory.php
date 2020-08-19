<?php

namespace Designpatterns\Structural\Flyweight;


class FlyweightFactory {

    private $flyweights = array();


    public function getFlyweight($intrinsicState)
    {
        $flyweightExists = array_key_exists($intrinsicState, $this->flyweights);
        if($flyweightExists)
        {
            return $this->flyweights[$intrinsicState];
        }
        else
        {
            $flyweight = new Flyweight($intrinsicState);
            $this->flyweights[$intrinsicState] = $flyweight;

            return $flyweight;
        }
    }

    public function getFlyweights()
    {
        return $this->flyweights;
    }

}