<?php

namespace App\Facade\Util;

class Customer
{
    private $id;
    private $name;
    private $saldo;
    private $status;

    public function __construct($id,$name,$saldo,$status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->saldo = $saldo;
        $this->status = $status;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}