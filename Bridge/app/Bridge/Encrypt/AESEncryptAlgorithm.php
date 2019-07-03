<?php

namespace App\Bridge\Encrypt;

class AESEncryptAlgorithm implements IEncryptAlgorithm
{
    public function encript(string $message, string $password) : string 
    {
        $method = "AES-256-CBC";
        $key = hash('sha256',$password);
        $iv = substr(hash('sha256',$password),0,16);
        $message_encrypt = openssl_encrypt($message,$method,$key,0,$iv);
        $message_encrypt = base64_encode($message_encrypt);
        return $message_encrypt;
    }
}