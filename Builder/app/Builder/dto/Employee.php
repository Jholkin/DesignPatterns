<?php

namespace App\Builder\dto;

use App\Builder\IBuilder;

class Employee
{
    private $name;
    private $age;
    private $gender;
    public function addEmployee($name,$age,$gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    public function __construct() {}

    public function EmployeeBuilder()
    {
        return new class($this->name,$this->age,$this->gender){
            private $name;
            private $age;
            private $gender;

            public function setName($name){
                $this->name=$name;
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

            public function build()
            {
                $employee = new Employee();
                $employee->addEmployee($this->name, $this->age, $this->gender);
                return $employee;
                //new Employee($this->name, $this->age, $this->gender, $this->address, $this->phones, $this->contacts);
            }
        };
        /*
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
                return $employee->addEmployee($this->name, $this->age, $this->gender, $this->address, $this->phones, $this->contacts);
                //new Employee($this->name, $this->age, $this->gender, $this->address, $this->phones, $this->contacts);
            }
        };*/
    }

}
