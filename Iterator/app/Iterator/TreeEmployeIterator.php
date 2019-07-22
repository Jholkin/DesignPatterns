<?php

namespace App\Iterator;

class TreeEmployeIterator implements IIterator
{
    private $employeeList;
    private $index = 0;

    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function hasNext()
    {
        if ($this->employeeList->getEmployeeCount() > $this->index) {
            return true;
        } else {
            return false;
        }
    }

    public function next()
    {
        if ($this->hasNext()) {
            return $this->employeeList->getEmployee(++$this->index);
        } else {
            return null;
        }
    }
}