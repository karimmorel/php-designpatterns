<?php

namespace Designpatterns\Behavioral\Visitor;


Use Designpatterns\Behavioral\Visitor\Visitor;
Use Designpatterns\Behavioral\Visitor\Element;

class ConcreteVisitor implements Visitor {
    public function export(Element $element)
    {
        if ($element instanceof ConcreteElement)
        {
            echo 'Let\'s add behaviour to the Concrete Element.<br/>';
        }
        else if ($element instanceof OtherConcreteElement)
        {
            echo 'Let\'s add behaviour to the Other Concrete Element.<br/>';
        }
    }
}