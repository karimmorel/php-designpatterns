<?php

namespace Designpatterns\Creational\Builder;


interface Builder {
    public function addTitle(String $title);
    public function addDescription(String $description);
    public function addAuthor(String $name);
    public function isDisplayed(bool $bool);
    public function addToFavorite(bool $bool);
}