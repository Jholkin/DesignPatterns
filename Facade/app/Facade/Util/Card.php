<?php

namespace App\Facade\Util;

class Card
{
    private $prefix;
    private $company;
    private $cardType;

    public function __construct(string $prefix, string $company, string $cardType)
    {
        $this->prefix = $prefix;
        $this->company = $company;
        $this->cardType = $cardType;
    }

    public function getPrefix()
    {
        return $this->prefix;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function getCardType()
    {
        return $this->cardType;
    }
}