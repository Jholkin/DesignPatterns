<?php

namespace App\Builder;

use App\Builder\dto\Employee;

abstract class BuilderEmployee extends Employee implements IBuilder
{
    private $name;
    private $age;
    private $gender;
    private $address;
    private $phones = array();
    private $contacts = array();

    public function __construct($name, $age, $gender, $address, $phones, $contacts) 
    {
        parent::__construct($name, $age, $gender, $address, $phones, $contacts);
    }
            
    public function setName($name) : self
    {
        $this->name = $name;
        return this;
    }

    public function setAge($age) : self
    {
        $this->age = $age;
        return this;
    }

    public function setGender($gender) : self
    {
        $this->gender = $gender;
        return this;
    }

    public function setAddress($address,$city,$country,$cp) : self
    {
        $this->address = new Address($address,$city,$country,$cp);
        return this;
    }

    public function addPhones($phoneNumber, $ext, $phoneType) : self
    {
        array_push($this->phones,new Phone($phoneNumber,$ext,$phoneType));
        return this;
    }

    public function addContacts($name,$phoneNumber,$ext,$phoneType,$address,$city,$country,$cp) : self
    {
        array_push($this->contacts,new Contact($name,new Phone($phoneNumber,$ext,$phoneType),new Address($address,$city,$country,$cp)));
        return this;
    }

    public function addContacts1($name,$phoneNumber,$ext,$phoneType) : self
    {
        array_push($this->contacts,new Contact($name,new Phone($phoneNumber,$ext,$phoneType)));
        return this;
    }

    public function build() : Employee
    {
        return new Employee($this->name, $this->age, $this->gender, $this->address, $this->phones, $this->contacts);
    }
}