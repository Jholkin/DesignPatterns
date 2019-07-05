<?php

namespace App\Facade;

interface IPaymentFacade
{
    public function pay(PaymentRequest $paymentRequest) : PaymentResponse;
}