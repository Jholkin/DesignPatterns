<?php

namespace App\Proxy\Services;

class SecurityService 
{
    public function authorization($user, $password)
    {
        if ((strcmp($user,"jholkin")==0) && (strcmp($password,"jholkin")==0)) {
            echo "User: ".$user." Autorizado";
            return true;
        } else {
            echo "User: ".$user." No autorizado";
            return false;
        }
    }
}