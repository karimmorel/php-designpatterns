<?php

namespace Designpatterns\Behavioral\Mediator;

Use Designpatterns\Behavioral\Mediator\Mediator;
Use Designpatterns\Behavioral\Mediator\Colleague;
Use Designpatterns\Behavioral\Mediator\ConcreteColleague;
Use Designpatterns\Behavioral\Mediator\OtherConcreteColleague;

class ConcreteMediator extends Mediator {

    private $colleague;
    private $otherColleague;

    public function __construct()
    {
        $this->colleague = new ConcreteColleague($this);
        $this->otherColleague = new OtherConcreteColleague($this);
    }

    public function update(Colleague $colleague)
    {
        if($colleague instanceof ConcreteColleague)
        {
            echo 'Concrete Colleague Changed;<br/>';
            $this->otherColleague->colleagueChanged();
        }
        else if($colleague instanceof OtherConcreteColleague)
        {
            echo 'Other Concrete Colleague Changed;<br/>';
            $this->colleague->colleagueChanged();
        }
    }

    public function getColleague()
    {
        return $this->colleague;
    }

    public function getOtherColleague()
    {
        return $this->otherColleague;
    }
}