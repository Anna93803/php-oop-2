<?php
require_once __DIR__ . '/products.php';

class Food extends Products {

    protected $weight;
    protected $ingredients;
    
    function __construct($_name, $_price,  $_weight, $_ingredients)
    {
        parent::__construct($_name, $_price);

        $this->setWeight($_weight);
        $this->setIngredients($_ingredients);
    }
    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of composition
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    public function printHtml() {
        echo "<strong>Alimenti per animali</strong>" . "<br>";
        echo "Nome prodotto: " . $this->getName() . " ";
        echo "€ " . " " . $this->getPrice() . "<br>";
        echo "gr " . $this->getWeight() ." " ;
        echo "Ingredienti: " . $this->getIngredients() . " ";
    }
}
