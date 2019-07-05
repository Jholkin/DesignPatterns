<?php

namespace App\Facade;

class GeneralPaymentError extends Exception
{
    public function generalPaymentError(string $message)
    {
        super($message);
    }
}