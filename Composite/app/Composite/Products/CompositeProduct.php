<?php

namespace App\Composite\Products;

class CompositeProduct extends AbstractProduct
{
    protected $products = array();

    public function __construct($name)
    {
        parent::__construct($name,0);
    }

    public function getPrice()
    {
        $price = 0;
        foreach ($this->products as $product) {
            $price = $price + $product->getPrice();
        }
        return $price;
    }

    public function setPrice($price)
    {
        throw new Exception("Error Processing Request", 1);
    }

    public function addProduct(AbstractProduct $product)
    {
        array_push($this->products,$product);
        //var_dump($this->products);
    }

    public function removeProduct(AbstractProduct $product)
    {
        //if (($objeto = array_search($product->getName(),$this->products) !== false)) {
            unset($this->products[$product]);
        //}
    }
}