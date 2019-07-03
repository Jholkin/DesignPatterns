<?php

namespace App\Adapter\APIBankY;

use App\Adapter\APIBankY\Threads\Hilo;

class YBankCreditSender implements Hilo
{
    public function sendCreditForValidate(YBankCreditApprove $request, YBankCreditSenderListener $listener) : void
    {
        $thread = new Thread();
        $runnable = new Runnable();
        $thread->run();            
        $thread->start();
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
            $thread->sleep(1000*30);

            $listener->notifyCreditResult($response);
    }
}