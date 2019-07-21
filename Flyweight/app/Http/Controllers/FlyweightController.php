<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flyweight\PlayList;
use App\Flyweight\PlayItemFactory;

class FlyweightController extends Controller
{
    private $songNames;
    private $playListNames;
    private $playLists;
    private $enableFlyweight;
    
    public function home(PlayItemFactory $playItemFactory)
    {
        $this->songNames = array();
        $this->playListNames = array();
        $this->playLists = array();

        echo "Proceso de creación de playlist iniciado, este proceso puede ser muy tardado".
        "<br> por la gran cantidad de objetos que se crearán, por favor espera un momento hasta".
        "<br> que se le notifique que el proceso ha terminado<br>";

        //acá hacemos la inyección de dependencias
        //PlayItemFactory->enableFlyweight = false;
        //$this->habilitarFlyweight(PlayItemFactory $playItemFactory);
        $playItemFactory->setEnableFlyweight(false);
        echo "".$playItemFactory->getEnableFlyweight();exit;
        $this->initArrays();
        $this->createRandomPlayList();

        echo "<br><br>Total playlist: ",count($this->playLists);
        echo "<br>Memoria usada: ", round(memory_get_usage()/1024, 2), "KB";
    }

    private function createRandomPlayList()
    {
        $p = 0;
        for ($i=0; $i < count($this->playListNames); $i++) { 
            $playList = new PlayList($this->playListNames[$i]);
            for ($j=0; $j < 10; $j++) { 
                $song = rand(100,200);
                $playList->addPlayItem($this->songNames[$song]);
            }
            array_push($this->playLists,$playList);
            if ($i != 0 && ($i+1)%(count($this->playListNames)/10) == 0) {
                $p = $p + 10;
                echo "<br>Completado ",$p,"%";
                echo "<br>Listas Creadas ",count($this->playLists);
            }
        }
    }

    private function initArrays()
    {
        for ($i=0; $i < 1000; $i++) { 
            $this->songNames[$i] = "Song ".($i+1);
        }

        for ($i=0; $i < 200; $i++) { 
            $this->playListNames[$i] = "PlayList ".($i+1);
        }
    }
}
