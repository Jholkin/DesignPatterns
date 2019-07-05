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
}