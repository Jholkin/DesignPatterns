<?php

namespace App\Facade;

class PaymentRequest
{
    private $customerID;
    private $ammount;
    private $cardNumber;
    private $cardName;
    private $cardExpDate;
    private $cardSecureNum;

    public function __construct()
    {
        
    }

    public function getCustomerId()
    {
        return $this->customerID;
    }

    public function getAmmount()
    {
        return $this->ammount;
    }

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    public function getCardName()
    {
        return $this->cardName;
    }

    public function getCardExpDate()
    {
        return $this->cardExpDate;
    }

    public function setCustomerId($id)
    {
        $this->customerID = $id;
    }

    public function setAmmount($ammount)
    {
        $this->ammount = $ammount;
    }

    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    public function setCardName($cardName)
    {
        $this->cardName = $cardName;
    }

    public function setCardExpDate($cardExpDate)
    {
        $this->cardExpDate = $cardExpDate;
    }

    public function setCardSecureNum($cardSecureNum)
    {
        $this->cardSecureNum = $cardSecureNum;
    }
}