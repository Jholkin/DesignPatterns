<?php

namespace App\SubSystemCRM;

use App\Facade\Util\Customer;
use App\Facade\Util\OnMemoryDataBase;

class CRMSystem
{
    public function findCustomer($customerId)
    {
        $onMemory = new OnMemoryDataBase();
        $customer = $onMemory->findCustomerById($customerId);
        return $customer;
    }
}