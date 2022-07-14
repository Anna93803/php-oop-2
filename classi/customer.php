<?php

class Customer {

    protected $login;
    protected $payCard;

    function __construct($_payCard)
    {
        $this->setPayCard($_payCard);
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;

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
}