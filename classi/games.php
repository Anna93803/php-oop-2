<?php
require_once __DIR__ . '/products.php';

class Games extends Products {

    protected $color;
    protected $lenght;

    function __construct($_price, $_name, $_color, $_lenght)
    {
        parent::__construct($_price, $_name);

        $this->setColor($_color);
        $this->setLenght($_lenght);
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of lenght
     */ 
    public function getLenght()
    {
        return $this->lenght;
    }

    public function setLenght($lenght)
    {
        $this->lenght = $lenght;

        return $this;
    }
}