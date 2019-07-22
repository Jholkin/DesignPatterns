<?php

namespace App\FactoryMethod\DAO;

use App\FactoryMethod\FactoryDB;
use App\FactoryMethod\Implement\AdapterDB;

class ProductDAO
{
    protected $adapterdb;

    public function __construct(AdapterDB $adapterdb)
    {
        $this->adapterdb = $adapterdb;
    }

    public function findAllProducts() {
        $this->adapterdb->findAllProducts();
    }

    public function saveProduct($id,$name,$price) {
        $this->adapterdb->saveProduct($id,$name,$price);
    }
}