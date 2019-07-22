<?php

namespace App\Factory\Implement;

use App\Factory\IDBAdapter;

class PostgresqlDBAdapter implements IDBAdapter
{
    private $host = "localhost", $database = "factory_method", $username = "postgres", $password = "postgres";

    public function getDataBase()
    {
        return new PostgresConnector($this->host,$this->database,$this->username,$this->password);
    }
}