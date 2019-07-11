<?php

namespace App\SubSystemBiller;

class BillingPayRequest
{
    private $customerId;
    private $ammount;

    public function __construct($customerId, $ammount)
    {
        $this->customerId = $customerId;
        $this->ammount = $ammount;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function getAmmount()
    {
        return $this->ammount;
    }
}