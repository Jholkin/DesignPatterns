<?php

namespace App\Iterator;

class ListEmployee
{
    private $employees = array();
    private $employeeCount = 0;
    private $employeeNumberToGet = 0;

    public function __construct(Employee $employee)
    {
        $this->addEmployeeRecursive($employee);
    }

    public function getEmployeeCount()
    {
        return $this->employeeCount;
    }

    public function setEmployeeCount($newCount)
    {
        $this->employeeCount = $newCount;
    }

    public function addEmployeeRecursive( $employee)
    {
        $this->setEmployeeCount($this->getEmployeeCount() + 1);
        $this->employees[$this->getEmployeeCount()] = $employee;
        if ($employee->getSubordinates() != null) {
            foreach ($employee->getSubordinates() as $subordinate) {
                $this->addEmployeeRecursive($subordinate);
            }
        }
    }

    public function getEmployee($employeeNumberToGet)
    {
        if ((is_numeric($employeeNumberToGet)) && ($employeeNumberToGet <= $this->employeeCount())) {
            return $this->employees[$employeeNumberToGet];
        } else {
            return null;
        }
    }

    public function hasNext()
    {
        if ($this->employees->getEmployeeCount() > $this->employeeCount) {
            return true;
        } else {
            return false;
        }
    }

    public function next()
    {
        if ($this->hasNext()) {
            return $this->employees->getEmployee(++$this->employeeNumberToGet);
        } else {
            return null;
        }
    }

    public function addSubordinate($subordinate) {
        if ($subordinate != null) {
            
        }
    }
}