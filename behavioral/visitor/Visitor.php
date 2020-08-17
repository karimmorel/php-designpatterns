<?php

namespace Designpatterns\Behavioral\Visitor;

Use Designpatterns\Behavioral\Visitor\Element;

interface Visitor {
    public function export(Element $element);
}