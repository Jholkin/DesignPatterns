<?php

namespace App\AbstractFactory\WebService;

use App\AbstractFactory\EmployeeService;

class WSEmployeeService implements EmployeeService
{
    protected $employee = [
        'jhil', 'jholkin', 'palacios', 'mariano'
    ];

    public function getEmployees() //: string
    {
        echo "<br>WebService<br>";
        return $this->employee;
    }
}