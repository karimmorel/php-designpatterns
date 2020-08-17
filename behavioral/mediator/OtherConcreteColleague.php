<?php

namespace Designpatterns\Behavioral\Mediator;


Use Designpatterns\Behavioral\Mediator\Colleague;

class OtherConcreteColleague implements Colleague {

    private $mediator;

    public function __construct(Mediator $mediator){
        $this->mediator = $mediator;
    }

    public function change()
    {
        echo 'Other Concrete colleague changed.<br/>';
        $this->mediator->update($this);
    }

    public function colleagueChanged()
    {
        echo 'The Other Concrete Colleague has been notified.<br/>';
    }
}
