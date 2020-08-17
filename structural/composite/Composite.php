<?php

namespace Designpatterns\Structural\Composite;


Use Designpatterns\Structural\Composite\Component;

class Composite implements Component {

    private $children = array();

    public function __construct(?Component $component)
    {
        if(isset($component))
        {
            $this->children[] = $component;
        }
    }

    public function addComponent(Component $component)
    {
        $this->children[] = $component;
    }

    public function removeChildren(Component $component)
    {
        if($key = array_search($this->children, $component))
        {
            unset($this->children[$key]);
        }
    }

    public function execute()
    {
        echo 'I am actually executing a composite.<br/>';

        foreach($this->children as $component)
        {
            $component->execute();
        }
    }
}
