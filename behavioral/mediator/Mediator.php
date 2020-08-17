<?php

namespace Designpatterns\Behavioral\Mediator;

Use Designpatterns\Behavioral\Mediator\Colleague;

abstract class Mediator {

    abstract public function update(Colleague $colleague);
}