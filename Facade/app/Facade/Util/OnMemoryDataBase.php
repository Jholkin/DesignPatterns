<?php

namespace App\Facade\Util;

require_once "Customer.php";
require_once "Card.php";

class OnMemoryDataBase
{
    private $listCustomer = array();
    private $listCard = array();

    public function __construct()
    {        
        array_push($this->listCustomer,new Customer("1","Jhil palacios",500,"Activo"));
        array_push($this->listCustomer,new Customer("2","Juan Peréz",300,"Suspendido"));
        array_push($this->listCustomer,new Customer("3","Melisa Mares",100,"Suspendido"));
        array_push($this->listCustomer,new Customer("4","Adriana López",100,"Baja"));

        array_push($this->listCard,new Card("123","VISA","Credit"));
        array_push($this->listCard,new Card("234","MASTERCARD","Debit"));
        array_push($this->listCard,new Card("345","AMEX","Credit"));
    }

    public function findCustomerById($id)
    {
        $customer;
        foreach ($this->listCustomer as $c) {
            if($c->getID() === $id)
            {
                $name = $c->getName();
                $saldo = $c->getSaldo();
                $status = $c->getStatus();
                $customer = new Customer($id,$name,$saldo,$status);
            }
        }
        return $customer;
    }

    public function changeCustomerStatus($id, $newStatus)
    {
        $customer = $this->findCustomerById($id);
        $customer->setStatus($newStatus);
        echo "<br>Cambio de satus del cliente ".$customer->getName()." ".$newStatus;
    }

    public function validateCardBins(string $creditCardPrefix)
    {
        $exist = false;
        $company = "";
        foreach ($this->listCard as $lc) {
            if (strcmp($creditCardPrefix,$lc->getPrefix()) == 0) {
                $company = $lc->getCompany();
                $exist = true;
            }
        }

        if($exist)
        {
            echo "<br>Tarjeta válida > ".$creditCardPrefix.", ".$company;
            return $exist;
        }else {
            echo "<br>Tarjeta inválida";
            return $exist;
        }
    }

    public function getCardCompany(string $creditCardPrefix)
    {
        
    }
}