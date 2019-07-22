<?php

namespace App\AbstractFactory\RestService;

use App\AbstractFactory\EmployeeService;

class RSEmployeeService implements EmployeeService
{
    protected $employee = [
        'jhil', 'jholkin', 'palacios', 'mariano'
    ];

    public function getEmployees() //: string
    {
        echo "<br>RestService<br>";
        return $this->employee;
    }
}