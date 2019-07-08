<?php

namespace App\Adapter\APIBankY;

use App\Adapter\APIBankY\Threads\Hilo;

class YBankCreditSender extends \Thread
{
    public function sendCreditForValidate(YBankCreditApprove $request, YBankCreditSenderListener $listener) : void
    {
        \Thread.start();
    }

    public function run()
    {
        echo "YBank recibió la solicitud, en un momento tendrá la respuesta, sea paciente por favor";
            $reponse = new YBankCreditApproveResult();

            if ($request->getCredit() <= 1500) {
                $response->setApproved('Y');
            }else {
                $response->setApproved('N');
            }
            \Thread.sleep(1000*30);

            $listener->notifyCreditResult($response);
    }
}