<?php

namespace App\Iterator;

class Employee implements IContainer
{
    private $name;
    private $role;
    private $subordinates;

    public function __construct($role,$puesto)
    {
        $this->role = $role;
        $this->name = $name;
    }
}