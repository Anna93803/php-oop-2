<?php

class CreditCard {

    private $number;
    private $expiration;

    function __construct($_number, $_expiration) {
        $this->setNumber($_number);
        $this->setExpiration($_expiration);
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of expiration
     */ 
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set the value of expiration
     *
     * @return  self
     */ 
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    public function date() {
        $now = date("Y-m");
        if(strtotime($this->expiration) > strtotime($now)) {
            return false;
        }
        return true;
    }

    public function printHtml() {
        echo "numero carta: " . $this->getNumber() . "<br>";
        echo "data scadenza: " . $this->getExpiration() . " ";
    }
}