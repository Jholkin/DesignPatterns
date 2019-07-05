<?php

namespace App\Composite;

use App\Composite\Products\SimpleProduct;
use App\Composite\Products\CompositeProduct;

class CompositeMain
{
    private $ram4gb;
    private $ram8gb;
    private $disk500gb;
    private $disk1tb;
    private $cpuAMD;
    private $cpuIntel;
    private $smallCabinete;
    private $bigCabinete;
    private $monitor20inch;
    private $monitor30inch;
    private $simpleMouse;
    private $gammerMouse;

    private $gammerPC;
    private $homePC;
    private $pc2x1;

    public function buildProducts()
    {
        //construcción de productos simples
        $this->ram4gb = new SimpleProduct("Memoria RAM 4GB",750,"KingStone");
        $this->ram8gb = new SimpleProduct("Memoria RAM 8GB",1000,"KingStone");
        $this->disk500gb = new SimpleProduct("Disco Duro 500GB",1500,"ACME");
        $this->disk1tb = new SimpleProduct("Disco Duro 1TB",2000,"ACME");
        $this->cpuAMD = new SimpleProduct("AMD RYZEN 7",4000,"AMD");
        $this->cpuIntel = new SimpleProduct("Intel i7",4500,"Intel");
        $this->smallCabinete = new SimpleProduct("Gabinete pequeño",2000,"ExCord");
        $this->monitor20inch = new SimpleProduct("Monitor 20",1500,"HP");
        $this->simpleMouse = new SimpleProduct("Raton Simple",150,"Genius");

        //Computadora para Gammer que incluye 8gb de ram, disco de 1tb
        //procesador AMD, gabinete pequeño, monitor de 20 y un mouse simple
        $this->gammerPC = new CompositeProduct("Gammer PC");
        $this->gammerPC->addProduct($this->ram8gb);
        $this->gammerPC->addProduct($this->disk1tb);
        $this->gammerPC->addProduct($this->cpuAMD);
        $this->gammerPC->addProduct($this->smallCabinete);
        $this->gammerPC->addProduct($this->monitor20inch);
        $this->gammerPC->addProduct($this->simpleMouse);
    }

    public function orderSimpleProducts()
        {
            $simpleProductOrder = new SaleOrder(1,"Rene Descarte");
            $simpleProductOrder->addProduct($this->ram4gb);
            $simpleProductOrder->addProduct($this->disk1tb);
            $simpleProductOrder->addProduct($this->simpleMouse);
            $simpleProductOrder->printOrder();
        }
}