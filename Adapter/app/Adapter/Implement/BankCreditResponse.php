<?php

namespace App\Adapter\Implement;

class BankCreditResponse
{
    public $approved;

    public function getApproved()
    {
        return $this->approved;
    }

    public function setApproved($approved)
    {
        $this->approved = $approved;
    }
}