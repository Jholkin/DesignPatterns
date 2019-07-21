<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proxy\IProcessEjecutor;
use App\Proxy\ServiceFactory;

class ProxyController extends Controller
{
    //
    public function index()
    {
        $user = "jholkin";
        $password = "jholkin";
        $idProcess = 1;

        $processEjecutor = ServiceFactory::createProcessEjecutor();
        try {
            $processEjecutor->ejecuteProcess($idProcess,$user,$password);
        } catch (\Throwable $th) {
            //throw $th;
            echo $th;
        }
    }
}
