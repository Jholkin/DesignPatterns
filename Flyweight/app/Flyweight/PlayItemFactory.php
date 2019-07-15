<?php

namespace App\Flyweight;

class PlayItemFactory
{
    public $enableFlyweight;
    private $playItems = array();
    private $idSequence;

    public function createPlayItem($songName)
    {
        if ($this->enableFlyweight && searchSong($songName)) {
            return searchSong($songName);
        } else {
            $playItem = new PlayItem($songName);
            $playItems[$songName] = $playItem;
            return $playItem;
        }
    }

    private function searchSong($songName)
    {
        foreach ($playItems as $item) {
            if(strcmp($songName,$item->getSongName()) == 0){
                return $songName;
            }
        }
        
    }
}