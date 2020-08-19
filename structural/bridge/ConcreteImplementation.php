<?php

namespace Designpatterns\Structural\Bridge;

Use Designpatterns\Structural\Bridge\Implementation;

class ConcreteImplementation implements Implementation {

    public $play = false;

    public function enable(bool $play)
    {
        $this->setPlay($play);
        echo $this->getState();
    }

    private function setPlay(bool $play)
    {
        $this->play = $play;
    }

    private function getState()
    {
        return ($this->play) ? 'Implementation actually playing.<br/>' : 'Implementation actually stopped.<br/>';
    }
}