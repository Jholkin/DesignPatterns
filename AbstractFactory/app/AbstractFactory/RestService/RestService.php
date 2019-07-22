<?php

namespace App\AbstractFactory\RestService;

use App\AbstractFactory\AbstractFactory;

class RestService implements AbstractFactory
{
    public function getEmployeeService() //: EmployeeService
    {
        return new RSEmployeeService();
    }

    public function getProductService() //: ProductService
    {
        return new RSProductService();
    }
}