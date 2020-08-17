<?php

namespace Designpatterns\Structural\Facade;

 
 Use Designpatterns\Structural\Facade\Facade;

class Client {

    public function execute()
    {
        $facade = new Facade;
        $facade->doVeryComplexeStuff();

        echo 'Very complexe stuff done.<br/>';
    }
}