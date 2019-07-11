<?php

namespace App\SubSystemBiller;

use App\Facade\Util\OnMemoryDataBase;
use App\Facade\Util\Customer;

class BillingSystem
{
    protected $onMemory;
    public function __construct()
    {
        $this->onMemory = new OnMemoryDataBase();
    }
    public function queryCustomerBalance($customerId)
    {
        $customer = $this->onMemory->findCustomerById($customerId);
        return $customer->getSaldo();
    }

    public function pay(BillingPayRequest $billingPay)
    {
        $customer = $this->onMemory->findCustomerById($billingPay->getCustomerId());
        $customer->setSaldo($customer->getSaldo() - $billingPay->getAmmount());

        echo "<br>Pago aplicado al cliente ".$customer->getName()." El saldo nuevo es: ".$customer->getSaldo();

        return $customer->getSaldo(); //New saldo
    }
}