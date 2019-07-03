<?php

namespace App\Adapter\APIBankX;

class XBankCreditAPI
{
    public function sendCreditRequest(XBankCreditRequest $request) : XBankCreditResponse
    {
        $response = new XBankCreditResponse();

        if ($request->getRequestAmount() <= 5000) {
            $response->setAproval(true);
        }else {
            $response->setAproval(false);
        }

        return $response;
    }
}