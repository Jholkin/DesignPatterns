<?php

namespace App\Composite\Products;

class SimpleProduct extends AbstractProduct
{
    protected $brand;

    public function __construct($name,$price,$brand)
    {
        parent::__construct($name,$price);
        $this->brand = $brand;
    }
}