<?php

namespace App\Facade;

interface IPaymentFacade
{
    public function pay($paymentRequest); //PaymentResponse
}