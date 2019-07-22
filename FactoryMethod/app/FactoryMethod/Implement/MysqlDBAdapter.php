<?php

namespace App\Factory\Implement;

use App\Factory\IDBAdapter;

class MysqlDBAdapter extends DBFactory
{
    private $host = "localhost";
    private $database = "factory_method";
    private $username = "root";
    private $password = "";

    public function getDataBase()
    {
        return new MySqlConnector($this->host,$this->database,$this->username,$this->password);
    }
}