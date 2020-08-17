<?php

namespace Designpatterns\Behavioral\Visitor;

Use Designpatterns\Behavioral\Visitor\Element;
Use Designpatterns\Behavioral\Visitor\Visitor;

class ConcreteElement implements Element {

    public function accept(Visitor $visitor)
    {
        $visitor->export($this);
    }
}
