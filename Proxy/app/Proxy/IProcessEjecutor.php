<?php

namespace App\Proxy;

interface IProcessEjecutor 
{
    public function ejecuteProcess($idProcess, $user, $password);
}