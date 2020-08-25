<?php

namespace Designpatterns\Creational\Builder;


Use Designpatterns\Creational\Builder\Builder;
Use Designpatterns\Creational\Builder\Product;

class ConcreteBuilder implements Builder {

    private $title;
    private $description;
    private $author = 'Me';
    private $displayed = false;
    private $favorite = false;

    public function addTitle(String $title)
    {
        $this->title = $title;
        return $this;
    }

    public function addDescription(String $description)
    {
        $this->description = $description;
        return $this;
    }
    
    public function addAuthor(String $author)
    {
        $this->author = $author;
        return $this;
    }
    
    public function isDisplayed(bool $displayed)
    {
        $this->displayed = $displayed;
        return $this;
    }

    public function addToFavorite(bool $favorite)
    {
        $this->favorite = $favorite;
        return $this;
    }

    public function create()
    {
        return new Product($this);
    }


    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getAuthor()
    {
        return $this->author;        
    }

    public function getDisplayed()
    {
        return $this->displayed;
    }

    public function getFavorite()
    {
        return $this->favorite;        
    }

}