<?php

namespace App\Iterator;

class ListEmployee
{
    private $employees = array();
    private $employeeCount = 0;

    public function getEmployeeCount()
    {
        return $this->employeeCount;
    }

    public function setEmployeeCount($newCount)
    {
        $this->employeeCount = $newCount;
    }

    public function addEmployee(Employee $employee)
    {
        $this->setEmployeeCount($this->getEmployeeCount() + 1);
        $this->employees[$this->getEmployeeCount()] = $employee;
        return $this->getEmployeeCount();
    }

    public function getEmployee($employeeNumberToGet)
    {
        if ((is_numeric($employeeNumberToGet)) && ($employeeNumberToGet <= $this->employeeCount())) {
            return $this->employees[$employeeNumberToGet];
        } else {
            return null;
        }
    }
}