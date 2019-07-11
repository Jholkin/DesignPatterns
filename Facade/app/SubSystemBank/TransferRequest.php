<?php

namespace App\SubSystemBank;

class TransferRequest
{
    private $ammount;
    private $cardNumber;
    private $cardName;
    private $cardExpDate;
    private $cardSecureNum;

    public function __construct($ammount,$cardNumber,$cardName,$cardExpDate,$cardSecureNum)
    {
        $this->ammount = $ammount;
        $this->cardNumber = $cardNumber;
        $this->cardName = $cardName;
        $this->cardExpDate = $cardExpDate;
        $this->cardSecureNum = $cardSecureNum;
    }

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    public function getAmmount()
    {
        return $this->ammount;
    }

    public function getCardName()
    {
        return $this->cardName;
    }
}