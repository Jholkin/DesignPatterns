<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facade\IPaymentFacade;
use App\Facade\OnlyPaymentFacadeImpl;
use App\Facade\PaymentRequest;

class FacadeController extends Controller
{
    //
    public function index()
    {
        $request = new PaymentRequest();
        $request->setAmmount(500);
        $request->setCardExpDate("10/2019");
        $request->setCardName("Adriana López");
        $request->setCardNumber("1234657890123456");
        $request->setCardSecureNum("345");
        $request->setCustomerId("4");

        $paymentFacade = new OnlyPaymentFacadeImpl();
        $paymentFacade->pay($request);
    }
}
