<?php

namespace App\Adapter\Implement;

use App\Adapter\APIBankY\YBankCreditApprove;
use App\Adapter\APIBankY\YBankCreditApproveResult;
use App\Adapter\APIBankY\YBankCreditSender;
use App\Adapter\APIBankY\YBankCreditSenderListener;

class YBankCreditAdaptee extends \Thread implements IBankAdapter, YBankCreditSenderListener
{
    private $yresponse; //variable de tipo  YBankCreditApproveResult

    public function sentCreditRequest(BankCreditRequest $request) : BankCreditResponse
    {
        $yrequest = new YBankCreditApprove();
        $yrequest->setCredit($request->getAmount());
        $yrequest->setName($request->getCustomer());

        $sender = new YBankCreditSender();
        $sender->sendCreditForValidate($yrequest,$this);

        do {
            \Thread.sleep(10000);
            echo "YBank petición en espera...";
        } while ($yresponse == null);

        $response = new BankCreditResponse();
        $response->setApproved($this->yresponse->getApproved() == "Y" ? true:false);

        return $response;
    }

    public function notifyCreditResult(YBankCreditApproveResult $result)
    {
        $this->yresponse = $result;
    }
}