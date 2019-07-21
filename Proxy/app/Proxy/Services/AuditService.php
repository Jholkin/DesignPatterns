<?php

namespace App\Proxy\Services;

class AuditService 
{
    public function auditServiceUsed($user,$service)
    {
        echo "<br>".$user." Utilizó el servicio ".$service." en: ".date('l jS \of F Y h:i:s A');
    }
}