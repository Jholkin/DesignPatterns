<?php

namespace App\Flyweight;

use App\Flyweight\PlayItemFactory;

class PlayList
{
    private $playListName;
    private $playItems = array();

    public function __construct($playListName)
    {
        $this->playListName = $playListName;
    }

    public function addPlayItem($songName, PlayItemFactory $playItemFactory)
    {
        
        array_push($this->playItems,$playItemFactory->createPlayItem($songName));
    }

    public function printList()
    {
        $out = "PlayList > ".$this->playListName;
        foreach ($this->playItems as $playItem) {
            $out = $out + "<br>"."";
        }

        echo $out;
    }
}