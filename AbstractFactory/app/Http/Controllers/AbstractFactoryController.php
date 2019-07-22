<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbstractFactory\AbstractFactory;

class AbstractFactoryController extends Controller
{
    protected $abstractFactory;

    public function index(AbstractFactory $abstractFactory)
    {
        //$this->abstractFactory = $abstractFactory;
        $employeeService = $abstractFactory->getEmployeeService();
        $productService = $abstractFactory->getProductService();

        print_r($employeeService->getEmployees());
        print_r($productService->getProducts());
    }
}
