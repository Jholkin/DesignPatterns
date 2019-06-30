<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Singleton\ConfigurationSingleton;

class SingletonController extends Controller
{
    public function index()
    {
        $singletonA = ConfigurationSingleton::getInstance();
        $singletonB = ConfigurationSingleton::getInstance();

        return view('index');
    }
}
