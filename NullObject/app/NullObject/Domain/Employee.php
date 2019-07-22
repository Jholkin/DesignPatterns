<?php

namespace App\NullObject\Domain;

use App\NullObject\Domain\Address;

class Employee
{
    private $id;
    private $name;
    private $address;

    public function __construct($id,$name,Address $address)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setAddress($address);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function employeeNull() {
        return new Class() {
            private $address;
            public function getId() {
                return -1;
            }

            public function getName() {
                return "UNKNOW EMPLOYEE";
            }

            public function getAddress() {
                //return $address->addressNull();
                return \App\NullObject\Domain\Address::addressNull();
            }
        };
    }
}