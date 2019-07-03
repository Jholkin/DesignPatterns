<?php

namespace App\Bridge\Implement;

interface IMessageEncrypt
{
    public function encryptMessage(string $message, string $password) : string;
}