<?php

namespace App\Adapter\APIBankX;

class XBankCreditResponse
{
    public $aproval;

    public function getAproval()
    {
        return $this->aproval;
    }

    public function setAproval($aproval)
    {
        $this->aproval = $aproval;
    }
}