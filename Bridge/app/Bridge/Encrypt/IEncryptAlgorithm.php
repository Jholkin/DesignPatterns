<?php

namespace App\Bridge\Encrypt;

interface IEncryptAlgorithm
{
    public function encript(string $message, string $password) : string;
}