<?php

namespace App\NullObject;

use App\NullObject\Domain\Employee;
use App\NullObject\Domain\Address;

class EmployeeDAOService
{
    private $employeeList = array();
    private $empl1;

    public function __construct()
    {
        $this->empl1 = new Employee(1,"Jhil Palacios",new Address("24 de Junio, Aguaytia"));
        array_push($this->employeeList, $this->empl1);
    }

    public function findEmployeeById($id) {
        foreach ($this->employeeList as $employee) {
            if ($employee->getId() == $id) {
                return $employee;
            }
        }
        return $this->empl1->employeeNull();
    }
}