<?php

namespace Designpatterns\Behavioral\Mediator;


Use Designpatterns\Behavioral\Mediator\Mediator;

interface Colleague {
    public function change();
    public function colleagueChanged();
}