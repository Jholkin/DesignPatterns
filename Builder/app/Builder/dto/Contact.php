<?php

namespace App\Builder\dto;

class Contact
{
    private $name;
    private $phone;
    private $address;

    public function __contruct($name,$phone,$address)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
    }
}
