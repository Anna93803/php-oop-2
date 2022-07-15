<?php

class Cart {

    protected $products = [];

    public function add(...$_products) {
        array_push($this->products, ...$_products);
    }

    public function getTotal($discount = 0) {
        $total = 0;
        foreach ($this->products as $product){
            $total += $product->getPrice();
        } 
    
        return $total;
    }

    /**
     * Get the value of products
     */ 
    public function getProducts()
    {
        return $this->products;
    }

    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }
}