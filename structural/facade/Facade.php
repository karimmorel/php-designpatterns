<?php

namespace Designpatterns\Structural\Facade;


Use Designpatterns\Structural\Facade\ComplexeService;
Use Designpatterns\Structural\Facade\VeryComplexeService;
Use Designpatterns\Structural\Facade\IncrediblyComplexeService;

/**
 * Instead of making the client develop all this stuff, we create a facade to locate the place where to change the code if we need to change it in the future.
 * But also it provides a simple method to use to the other of the services
 * And finally, it is more reusable because we remove complexity
 * 
 * Object oriented specificity : Abstraction
 */

class Facade {
    private $complexeService;
    private $veryComplexeService;
    private $incrediblyComplexeService;

    public function __construct()
    {
        $this->complexeService = new ComplexeService;
        $this->veryComplexeService = new VeryComplexeService;
        $this->incrediblyComplexeService = new IncrediblyComplexeService;
    }

    public function doVeryComplexeStuff()
    {
        echo 'Facade launching the process.<br/>';
        $this->complexeService->execute();
        $this->veryComplexeService->execute();
        $this->incrediblyComplexeService->execute();
    }
}
