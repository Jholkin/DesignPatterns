<?php

namespace App\Proxy;

use App\Proxy\Services\AuditService;
use App\Proxy\Services\SecurityService;
use App\Proxy\DefaultProcessEjecutor;

class ProcessEjecutorProxy implements IProcessEjecutor
{
    public function ejecuteProcess($idProcess, $user, $password)
    {
        try {
            $securityService = new SecurityService();
            if (!$securityService->authorization($user,$password)) {
                throw new Exception("El usuario ".$user." no tiene privilegios para ejecutar este proceso", 1);
            }

            $ejecutorProcess = new DefaultProcessEjecutor();
            $ejecutorProcess->ejecuteProcess($idProcess,$user,$password);

            $audit = new AuditService();
            $audit->auditServiceUsed($user,\get_class($ejecutorProcess));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}