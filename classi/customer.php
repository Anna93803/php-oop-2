<?php

require_once __DIR__ . "./cart.php";
// require_once __DIR__ . "./creditCard.php";
class Customer {

    protected $firstName;
    protected $lastName;
    protected $isRegistered = false;
    public Cart $cart;
    public CreditCard $crediCard;

    function __construct($_firstName = null, $_lastName = null, $_isRegistered, $_number, $_expiration)
    {   

        $this->setisRegistered($_isRegistered);
        $this->cart = new Cart();
        $this->crediCard = new CreditCard($_number, $_expiration);

        if(isset($_firstName) && isset($_lastName)) {
            $this->register($_firstName, $_lastName);
        }
    }

    public function register($_firstName, $_lastName) {
        $this->setFirstName($_firstName);
        $this->setLastName($_lastName);
        $this->setisRegistered(true);
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

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of payCard
     */ 
    public function getisRegistered()
    {
        return $this->pisRegistered;
    }

    public function setisRegistered($isRegistered)
    {
        $this->isRegistered = $isRegistered;

        return $this;
    }

    public function getFullName() {

        return $this->getFirstName() . " " . $this->getLastName();
    }

    public function printHtml() {
        echo "<strong>Login</strong>" . "<br>";
        echo "Utente: " . "" . $this->getFullName() . "<br>";
    }
}