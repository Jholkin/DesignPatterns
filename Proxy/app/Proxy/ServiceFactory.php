<?php

namespace App\Proxy;

class ServiceFactory 
{
    public static function createProcessEjecutor()
    {
        return new ProcessEjecutorProxy();
    }
}