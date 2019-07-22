<?php

namespace App\AbstractFactory;

interface AbstractFactory
{
    public function getEmployeeService();// : EmployeeService;
    public function getProductService();// : ProductService;
}