<?php

namespace App\NullObject\Domain;

class Address
{
    private $fullAddress;

    public function __construct($fullAddress)
    {
        $this->setFullAddress($fullAddress);
    }

    public function getFullAddress() {
        return $this->fullAddress;
    }

    public function setFullAddress($fullAddress) {
        $this->fullAddress = $fullAddress;
    }

    public function addresNull() {
        return new Class() {
            public function getFullAddress()
            {
                return "NOT ADDRESS";
            }
        };
    }
}