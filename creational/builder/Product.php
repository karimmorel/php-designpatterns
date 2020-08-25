<?php

namespace Designpatterns\Creational\Builder;


Use Designpatterns\Creational\Builder\Builder;

class Product {
    public $title;
    public $description;
    public $author;
    public $displayed;
    public $favorite;

    public function __construct(Builder $builder)
    {
        $this->title = $builder->getTitle();
        $this->description = $builder->getDescription();
        $this->author = $builder->getAuthor();
        $this->displayed = $builder->getDisplayed();
        $this->favorite = $builder->getFavorite();
    }

    public function execute()
    {
        foreach ($this as $property => $value)
        {
            echo 'My '.$property.' is '.$value.'.<br/>';
        }
    }
}
