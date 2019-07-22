<?php

namespace App\AbstractFactory\WebService;

use App\AbstractFactory\AbstractFactory;

class WebService implements AbstractFactory
{
    public function getEmployeeService() //: EmployeeService
    {
        return new WSEmployeeService();
    }

    public function getProductService() //: ProductService
    {
        return new WSProductService();
    }
}