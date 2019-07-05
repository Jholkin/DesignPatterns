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
        array_push($listCustomer,new Customer(1,"Jhil palacios",500,"Activo"));
        array_push($listCustomer,new Customer(2,"Juan Peréz",300,"Suspendido"));
        array_push($listCustomer,new Customer(3,"Melisa Mares",100,"Suspendido"));
        array_push($listCustomer,new Customer(4,"Adriana López",100,"Baja"));

        array_push($listCard,new Card("123","VISA","Credit"));
        array_push($listCard,new Card("234","MASTERCARD","Debit"));
        array_push($listCard,new Card("345","AMEX","Credit"));
    }

    public function findCustomerById($id) : Customer
    {
        $customer;
        foreach ($listCustomer as $c) {
            if($c->id == $id)
            {
                $customer = $c;
            }
        }
        return $customer;
    }

    public function changeCustomerStatus($id, $newStatus)
    {
        $customer = $this->findCustomerById($id);
        $customer->setStatus($newStatus);
        echo "<br>Cambio de satus del cliente ".$customer->getName." ".$newStatus;
    }

    public function validateCardBins(string $creditCardPrefix) : boolean
    {
        if(CardBin::where('Prefix',$creditCardPrefix))
    }
}