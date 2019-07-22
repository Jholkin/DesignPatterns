<?php

namespace App\AbstractFactory\WebService;

use App\AbstractFactory\ProductService;

class WSProductService implements ProductService
{
    protected $products = [
        'tv', 'laptop', 'mouse', 'procesador'
    ];

    public function getProducts()// : string
    {
        echo "<br>WebService<br>";
        return $this->products;
    }
}