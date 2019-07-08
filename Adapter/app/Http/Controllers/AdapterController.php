<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adapter\Implement\BankCreditRequest;
use App\Adapter\Implement\BankCreditResponse;
use App\Adapter\Implement\IBankAdapter;
use App\Adapter\Implement\XBankCreditAdaptee;
use App\Adapter\Implement\YBankCreditAdaptee;

class AdapterController extends Controller
{
    public function index()
    {
        //Request genérico para las dos API's
        $request = new BankCreditRequest();
        $request->setCustomer("Jhil Palacios");
        $request->setAmount(1000);

        $xBank = new XBankCreditAdaptee();
        $xresponse = $xBank->sendCreditRequest($request); //$xresponse es del tipo BankCreditResponse
        echo "xBank Approved > ".$xresponse->getApproved();

        $yBank = new YBankCreditAdaptee();
        $yresponse = $yBank->sentCreditRequest($request); //$yresponse es del tipo BankCreditResponse
        echo "yBank Approved > ".$yresponse->getApproved();
    }
}
