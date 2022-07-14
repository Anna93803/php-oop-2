<?php

class Products {

    protected $price;
    protected $name;

    
    function __construct($_price, $_name) 
    {
        $this->setPrice($_price);
        $this->setName($_name);
    }
    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}