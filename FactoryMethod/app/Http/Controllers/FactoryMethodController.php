<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FactoryMethod\Implement\AdapterDB;
use App\FactoryMethod\DAO\Product;
use App\FactoryMethod\DAO\ProductDAO;

class FactoryMethodController extends Controller
{
    //
    public function index(AdapterDB $adapterdb)
    {
        $productA = new Product(1,"Producto A",100);
        $productB = new Product(2,"Producto B",100);

        $productDAO = new ProductDAO($adapterdb);

        //$productDAO->saveProduct($productA->getId(),$productA->getName(),$productA->getPrice());
        //$productDAO->saveProduct($productB->getId(),$productB->getName(),$productB->getPrice());

        $productDAO->findAllProducts();
    }
}
