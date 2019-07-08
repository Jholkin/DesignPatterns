<?php

namespace App\Adapter\Implement;

interface IBankAdapter
{
    public function sendCreditRequest(BankCreditRequest $request) : BankCreditResponse;
}