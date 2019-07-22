<?php

namespace App\FactoryMethod;

abstract class DBFactory
{
    abstract public function getDataBase() : DataBaseConector;
}