<?php

namespace App\Iterator;

use App\Iterator\ListEmployee;

class Employee implements IContainer
{
    private $name;
    private $role;
    private $subordinates = array();

    public function __construct($name,$role,$subordinates)
    {
        $this->name = $name;
        $this->role = $role;
        array_push($this->subordinates, $subordinates);
    }

    public function createIterator()
    {
        return new ListEmployee($this->Employee);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getSubordinates()
    {
        return $this->subordinates;
    }

    public function toString() {
        return "Employee{" . "name=" . $this->getName() . " - role=" . $this->getRole() . "}";
    }
}