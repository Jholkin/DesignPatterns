<?php

namespace App\Flyweight;

class PlayList
{
    private $playListName;
    private $playItems = array();

    public function __construct($playListName)
    {
        $this->playListName = $playListName;
    }

    public function addItem($songName)
    {
        array_push($this->playItems,PlayItemFactory->createPlayItem($songName));
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