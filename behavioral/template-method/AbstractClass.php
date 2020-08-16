<?php

namespace Designpatterns\Behavioral\Templatemethod;

// Here we create an abstract class and not an interface because we need an abstract structure (which cannot be instanciated) in which we can implement the forced behaviour

abstract class AbstractClass {

    public function execute()
    {
        echo 'I insert some behaviour I want all my subclasses to implement.<br/>';
        $this->doExecute();
    }

    // Here we set the method with the protected scope because we want the subclass to implement it (abstract), but we want the user of this object to use the method execute()
    protected abstract function doExecute();
}