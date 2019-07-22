<?php

namespace App\AbstractFactory\RestService;

use App\AbstractFactory\ProductService;

class RSProductService implements ProductService
{
    protected $products = [
        'tv', 'laptop', 'mouse', 'procesador'
    ];

    public function getProducts() //: string
    {
        echo "<br>RestService<br>";
        return $this->products;
    }
}