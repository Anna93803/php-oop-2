<?php
require_once __DIR__ .  "/customer.php";
class Products extends Customer {

    protected $name;
    protected $price;

    
    function __construct($_name, $_price) 
    {
        $this->setName($_name);
        $this->setPrice($_price);
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

    public function printHtml() {
        echo "Nome prodotto: ". $this->getName() . "<br>";
        echo "Il prezzo del prodotto" . $this->getPrice() . "<br>";
    }
}