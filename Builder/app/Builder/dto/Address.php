<?php

namespace App\Builder\dto;

class Address
{
    private $address;
    private $city;
    private $country;
    private $cp;

    public function __construct($address,$city,$country,$cp)
    {
        $this->address = $address;
        $this->city = $city;
        $this->country = $country;
        $this->cp = $cp;
    }
}