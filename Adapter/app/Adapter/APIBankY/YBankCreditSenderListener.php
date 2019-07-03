<?php

namespace App\Adapter\APIBankY;

interface YBankCreditSenderListener
{
    public function notifyCreditResult(YBankCreditApproveResult $result) : void;
}