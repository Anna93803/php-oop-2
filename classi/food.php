<?php
require_once __DIR__ . '/products.php';

class Food extends Products {

    protected $weight;
    protected $ingredients;
    
    function __construct($_price, $_name, $_weight, $_ingredients)
    {
        parent::__construct($_price, $_name);

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
}
