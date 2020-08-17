<?php

namespace Designpatterns\Behavioral\Visitor;


Use Designpatterns\Behavioral\Visitor\Visitor;

interface Element {
    public function accept(Visitor $visitor);
}