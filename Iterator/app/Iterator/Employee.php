<?php

namespace App\Iterator;

class Employee implements IContainer
{
    private $name;
    private $role;
    private $subordinates = array();

    public function __construct($role,$puesto,$subordinates)
    {
        $this->role = $role;
        $this->name = $name;
        $this->subordinates = $subordinates;
    }

    public function createIterator()
    {
        return new TreeEmployeeIterator($this->Employee);
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

}