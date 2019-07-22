<?php

namespace App\Iterator;

interface IIterator
{
    public function hastNext();
    public function next();
}