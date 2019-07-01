<?php

namespace App\Builder\dto;

class Phone
{
    private $phoneNumber;
    private $ext;
    private $phoneType;

    public function __construct($phoneNumber,$ext,$phoneType)
    {
        $this->phoneNumber = $phoneNumber;
        $this->ext = $ext;
        $this->phoneType = $phoneType;
    }
}