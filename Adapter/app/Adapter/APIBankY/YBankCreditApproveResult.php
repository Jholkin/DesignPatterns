<?php

namespace App\Adapter\APIBankY;

class YBankCreditApproveResult
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