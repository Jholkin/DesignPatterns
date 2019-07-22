<?php

namespace App\FactoryMethod\Implement;

use App\FactoryMethod\DataBaseConector;

class MySqlConnector implements DataBaseConector
{
    private $host, $database, $username, $password;

    public function __construct($host,$database,$username,$password)
    {
        $this->host = $host;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
    }

    public function connection() {
        $conexion = pg_connect("$this->host,$this->database,$this->username,$this->password");
        return $conexion;
    }

    public function getAllProducts() {
        $sql = "SELECT * FROM productos ORDER BY id";
        $ok = true;

        //ejecutamos la consulta
        $rs = pg_query($this->connection(), $sql);

        if ($rs) {
            //obtenemos el número de filas
            if (pg_num_rows($rs) > 0) {
                echo "LISTADO DE PRODUCTOS";
                echo "===================<br>";

                //recorremos el rs y mostramos los datos
                while ($obj = pg_fetch_object($rs)) {
                    echo $obj->id." - ".$obj->name." - ".$obj->price."<br>";
                }
            } else {
                echo "No se encontraron productos";
            }
        } else {
            $ok = false;
        }
        
        return $ok;
    }

    public function saveProduct($product) {
        $sql = "INSERT INTO productos VALUES (".$product->getId().", ".$product->getName().", ".$product->getPrice().")";
        return pg_query($this->connection(),$sql);
    }
}