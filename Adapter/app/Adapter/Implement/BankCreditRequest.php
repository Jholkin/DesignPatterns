<?php

namespace App\Adapter\Implement;

class BankCreditRequest
{
    private $customer;
    private $amount;

    public function getCustomer()
    {
        return $this->customer;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
}
