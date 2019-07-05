<?php

namespace App\Facade;

class PaymentResponse
{
    private $paymentConfirmNumber;
    private $newBalance;
    private $customerStatus;

    public function __construc(string $paymentConfirmNumber, float $newBalance, string $customerStatus)
    {
        $this->paymentConfirmNumber = $paymentConfirmNumber;
        $this->newBalance = $newBalance;
        $this->customerStatus = $customerStatus;
    }
}