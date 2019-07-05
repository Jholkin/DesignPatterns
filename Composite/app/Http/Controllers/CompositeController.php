<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Composite\CompositeMain;

class CompositeController extends Controller
{
    public function index()
    {
        $a = new CompositeMain();
        $a->buildProducts();
        $a->orderSimpleProducts();
    }
}
