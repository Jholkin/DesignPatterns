<?php

namespace App\Adapter\APIBankX;

class XBankCreditRequest
{
    private $customerName;
    private $requestAmount;

    public function getCustomerName()
    {
        return $this->customerName;
    }

    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }

    public function getRequestAmount()
    {
        return $this->requestAmount;
    }

    public function setRequestAmount($requestAmount)
    {
        $this->requestAmount = $requestAmount;
    }
}