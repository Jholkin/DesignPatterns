<?php

namespace App\Bridge\Encrypt;

class NoEncryptAlgorithm
{
    public function encript( $message,  $password) : string
    {
        return $message;
    }
    
}