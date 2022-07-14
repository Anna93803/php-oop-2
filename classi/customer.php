<?php

class Customer {

    protected $firstName;
    protected $lastName;
    protected $payCard;

    function __construct($_firstName, $_lastName, $_payCard)
    {   
        $this->setFirstName($_firstName);
        $this->setLastName($_lastName);
        $this->setPayCard($_payCard);
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of payCard
     */ 
    public function getPayCard()
    {
        return $this->payCard;
    }

    public function setPayCard($payCard)
    {
        $this->payCard = $payCard;

        return $this;
    }

    public function getFullName() {

        return $this->getFirstName() . " " . $this->getLastName();
    }

    public function printHtml() {
        echo "<strong>Login</strong>" . "<br>";
        echo "Login utente: " . "" . $this->getFullName() . "<br>";
        echo "Carta di credito: " . "" .$this->getPayCard() . "<br>";
    }
}