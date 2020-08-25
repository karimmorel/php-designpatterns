<?php

namespace Designpatterns\Creational\Builder;


Use Designpatterns\Creational\Builder\Builder;

class Director {

    public function createFavoriteProduct(Builder $builder)
    {
        $builder->addToFavorite(true);
        $builder->isDisplayed(true);

        return $builder;
    }
}