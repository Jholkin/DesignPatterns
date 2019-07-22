<?php

namespace App\FactoryMethod\DAO;

class Product
{
    private $id;
    private $name;
    private $price;

    public function __construct($id,$name,$price)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setPrice($price);
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}