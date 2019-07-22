<?php

namespace App\FactoryMethod\DAO;

use App\Factory\DBFactory;

class ProductDAO implements DBFactory
{
    private $dbFactory;

    public function __construct(DBFactory $dbFactory)
    {
        $this->dbFactory = $dbFactory;
    }

    public function getDataBase($type) {
        switch ($type) {
            case 'mysql':
                return new MySqlDBAdapter();
                break;
            case 'pgsql':
                # code...
                break;
            default:
                echo "BASE DE DATOS NO SOPORTADA";
                break;
        }
    }

    public function findAllProducts() {
        
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
}