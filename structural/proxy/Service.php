<?php

namespace Designpatterns\Structural\Proxy;

Use Designpatterns\Structural\Proxy\ServiceInterface;

class Service implements ServiceInterface {

    public function execute()
    {
        echo 'Actually executing the service.<br/>';
    }
}