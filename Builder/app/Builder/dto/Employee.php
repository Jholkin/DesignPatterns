<?php

namespace App\Builder\dto;

use App\Builder\IBuilder;

class Employee
{
    private $name;
    private $age;
    private $gender;
    private $address;
    private $phones;
    private $contacts;

    public function addEmployee($name,$age,$gender,$address,$phones,$contacts)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->address = $address;
        $this->phones = $phones;
        $this->contacts = $contacts;
    }
    public function __construct() {}

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGender() {
        return $this->gender;
    }

    public function EmployeeBuilder()
    {
        return new class($this->name, $this->age, $this->gender, $this->address, $this->phones, $this->contacts) extends Employee implements IBuilder
        {
            private $name;
            private $age;
            private $gender;
            private $address;
            private $phones = array();
            private $contacts = array();
            
            public function setName($name)
            {
                $this->name = $name;
                return $this;
            }

            public function setAge($age)
            {
                $this->age = $age;
                return $this;
            }

            public function setGender($gender)
            {
                $this->gender = $gender;
                return $this;
            }

            public function setAddress($address,$city,$country,$cp)
            {
                $this->address = new Address($address,$city,$country,$cp);
                return $this;
            }

            public function addPhones($phoneNumber, $ext, $phoneType)
            {
                array_push($this->phones,new Phone($phoneNumber,$ext,$phoneType));
                return $this;
            }

            public function addContacts($name,$phoneNumber,$ext,$phoneType,$address,$city,$country,$cp)
            {
                array_push($this->contacts,new Contact($name,new Phone($phoneNumber,$ext,$phoneType),new Address($address,$city,$country,$cp)));
                return $this;
            }

            public function addContacts1($name,$phoneNumber,$ext,$phoneType)
            {
                array_push($this->contacts,new Contact($name,new Phone($phoneNumber,$ext,$phoneType)));
                return $this;
            }

            public function build()
            {
                $employee = new Employee();
                $employee->addEmployee($this->name, $this->age, $this->gender, $this->address, $this->phones, $this->contacts);
                return $employee;
            }
        };
    }

}
