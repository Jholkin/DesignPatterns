<?php

namespace App\FactoryMethod;

interface DataBaseConector
{
    public function getAllProducts();

    public function saveProduct($product);
}