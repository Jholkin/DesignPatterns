<?php

namespace App\Facade;

use App\SubSystemBank\BankSystem;
use App\SubSystemBank\TransferRequest;
use App\SubSystemBiller\BillingSystem;
use App\SubSystemBiller\BillingPayRequest;
use App\SubSystemCRM\CRMSystem;
use App\SubSystemEmail\EmailSystem;

class OnlyPaymentFacadeImpl implements IPaymentFacade
{
    private $crmSystem;
    private $billingSystem;
    private $bankSystem;
    private $emailSenderSystem;

    public function __construct()
    {
        $this->crmSystem = new CRMSystem();
        $this->billingSystem = new BillingSystem();
        $this->bankSystem = new BankSystem();
        $this->emailSenderSystem = new EmailSystem();
    }

    public function pay($request) // $request de tipo PaymentRequest
    {
        $customer = $this->crmSystem->findCustomer($request->getCustomerId());
        //Validate set
        if ($customer == null) {
            throw new Exception("El cliente con el id".$request->getCustomerId()." no existe", 1);
        }elseif (strcmp("Baja", $customer->getStatus()) == 0) {
            //throw new Exception("El cliente con el id".$request->getCustomerId()." está dado de baja", 1);
            echo "<br>El cliente con el id ".$request->getCustomerId()." está dado de baja"; exit;
        }elseif ($request->getAmmount() > $this->billingSystem->queryCustomerBalance($customer->getId())) {
            //throw new Exception("Se está intentando realizar un pago, mayor saldo al cliente", 1);
            echo "<br>Se está intentando realizar un pago mayor saldo al cliente"; exit;
        }

        //Pago bancario, se realiza el cargo a la tarjeta
        $transfer = new TransferRequest(
            $request->getAmmount(),
            $request->getCardNumber(),
            $request->getCardName(),
            $request->getCardExpDate(),
            $request->getCardNumber()
        );
        $payReference = $this->bankSystem->transfer($transfer);

        //Afectación del saldo en el sistema de facturación
        $billingRequest = new BillingPayRequest(
            $request->getCustomerId(),
            $request->getAmmount()
        );
        $newBalance = $this->billingSystem->pay($billingRequest);

        //el cliente se reactiva si el nuevo saldo es menor  de 51$
        $newStatus = $customer->getStatus();
        if ($newBalance < 51) {
            
        }

        //Envío de la confirmación del pago por email
        $number = $request->getCardNumber();
        $subfix = substr($number,strlen($number)-4, strlen($number));
        $message = [
            "name"          =>  $customer->getName(),
            "ammount"       =>  $request->getAmmount(),
            "balance"       =>  $newBalance,
            "cardNumber"    =>  $subfix,
            "reference"     =>  $payReference,
            "newStatus"     =>  $newStatus
        ];
        
        $this->emailSenderSystem->sendEmail($message);

        return new PaymentResponse($payReference,$newBalance,$newStatus);
    }

}