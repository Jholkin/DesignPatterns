<?php

namespace App\Bridge\Implement;

use App\Bridge\Encrypt\IEncryptAlgorithm;

class DefaultMessageEncrypt implements IMessageEncrypt
{
    private $encryptAlgorithm;

    public function __construct( $encryptAlgorithm)
    {
        $this->encryptAlgorithm = $encryptAlgorithm;
    }

    public function encryptMessage( $message,  $password) : string
    {
        return $this->encryptAlgorithm->encript($message,$password);
    }
}