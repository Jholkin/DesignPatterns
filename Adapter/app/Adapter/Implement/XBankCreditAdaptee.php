<?php

namespace App\Adapter\Implement;

use App\Adapter\APIBankX\XBankCreditAPI;
use App\Adapter\APIBankX\XBankCreditRequest;
use App\Adapter\APIBankX\XBankCreditResponse;

class XBankCreditAdaptee implements IBankAdapter
{
    public function sendCreditRequest(BankCreditRequest $request) : BankCreditRequest
    {
        $xrequest = new XBankCreditRequest(); //$request objeto del tipo XBankCreditRequest
        $xrequest->setCustomerName($request->getCustomer());
        $xrequest->setRequestAmount($request->getAmount());

        $api = new XBankCreditAPI(); //$api objeto del tipo XBankCreditAPI
        $xresponse = $api->sendCreditRequest($xrequest);

        $response = new BankCreditResponse(); //$response objeto del tipo BankCreditResponse
        $response->setApproved($xresponse->isAproval());

        return $response;
    }
}
