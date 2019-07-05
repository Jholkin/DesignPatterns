<?php

namespace App\Composite;

class SaleOrder
{
    private $orderId;
    private $customer;
    protected $products = array();

    public function __construct($orderId,$customer)
    {
        $this->orderId = $orderId;
        $this->customer = $customer;
    }

    public function getPrice()
    {
        $price = 0;
        foreach ($this->products as $product) {
            $price = $price + $product->getPrice();
        }
        return $price;
    }

    public function addProduct( $product)
    {
        array_push($this->products,$product);
        //var_dump($this->products);
    }

    public function printOrder()
    {
        echo "Orden: ".$this->orderId."<br>Cliente: ".$this->customer."<br>Productos:";
        foreach ($this->products as $product) {
            echo "<br>".$product->getName()."\t ".$product->getPrice();
        }
        echo "<br>Total: ".$this->getPrice();
    }
}