<?php

namespace App\Proxy;

class DefaultProcessEjecutor implements IProcessEjecutor
{
    public function ejecuteProcess($idProcess, $user, $password)
    {
        try {
            echo "<br>Procesos ".$idProcess." En ejecución";
            echo "<br>Procesos ".$idProcess." Terminados";
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}