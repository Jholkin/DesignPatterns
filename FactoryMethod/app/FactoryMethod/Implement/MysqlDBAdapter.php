<?php

namespace App\FactoryMethod\Implement;

use App\FactoryMethod\Implement\AdapterDB;

class MysqlDBAdapter implements AdapterDB
{
    private $host = "localhost";
    private $database = "factory_method";
    private $username = "root";
    private $password = "";

    public function getConnection() {
        echo "Conection with DataBase Mysql";
        return $this->createConnection();
    }

    public function createConnection() {
        $conexion = \mysqli_connect($this->host, $this->username, $this->password, $this->database) or die("no se ah podido conectar");
        echo "<br>Conecction successfully";
        return $conexion;
    }

    public function findAllProducts() {
        $sql = "SELECT * FROM productos ORDER BY id";

        $resultado = \mysqli_query($this->getConnection(), $sql);

        echo "<br>LISTADO DE PRODUCTOS<br>";
        echo "====================<br>";
        while ($columna = mysqli_fetch_array( $resultado ))
        {
            echo $columna['id'] . " - " . $columna['name'] . " - " . $columna['price'] . "<br>";
        }
    }

    public function saveProduct($id,$name,$price) {
        $sql = "INSERT INTO productos VALUES ('$id', '$name', '$price')";
        $resultado = \mysqli_query($this->getConnection(), $sql);
    }
}