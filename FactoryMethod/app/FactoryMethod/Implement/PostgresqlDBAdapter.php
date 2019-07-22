<?php

namespace App\FactoryMethod\Implement;

use App\FactoryMethod\Implement\AdapterDB;

class PostgresqlDBAdapter implements AdapterDB
{
    private $host = "localhost";
    private $database = "factory_method";
    private $username = "postgres";
    private $password = "postgres";

    public function getConnection() {
        echo "Conection with DataBase Postgresql";
        return $this->createConnection();
    }

    public function createConnection() {
        $conn_string = "host=".$this->host." ".
                        "dbname=".$this->database." ".
                        "user=".$this->username." ".
                        "password=".$this->password;
        $con = "host=localhost port=5432 dbname=factory_method user=postgres password=postgres";
        $conexion = \pg_connect($con);
        return $conexion;
    }

    public function findAllProducts() {
        $conexion = $this->getConnection();
        $sql = "SELECT * FROM productos ORDER BY id";
        $ok = true;

        //ejecutamos la consulta
        $rs = pg_query($conexion, $sql);

        if ($rs) {
            //obtenemos el número de filas
            if (pg_num_rows($rs) > 0) {
                echo "<br>LISTADO DE PRODUCTOS<br>";
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

    public function saveProduct($id,$name,$price) {
        $conexion = $this->getConnection();
        $sql = "INSERT INTO productos VALUES ('$id', '$name', '$price')";
        return pg_query($conexion,$sql);
    }
}