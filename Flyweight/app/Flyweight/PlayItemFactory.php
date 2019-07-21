<?php

namespace App\Flyweight;

class PlayItemFactory
{
    private $enableFlyweight;
    private $playItems = array();
    private $idSequence = 0;

    public function createPlayItem($songName)
    {
        if ($this->enableFlyweight && searchSong($songName)) {
            return searchSong($songName);
        } else {
            $this->idSequence += 1;
            $playItem = new PlayItem($this->idSequence,$songName);
            $this->playItems[$songName] = $playItem;
            return $playItem;
        }

        if ($this->enableFlyweight and searchSong($songName)) {
            return searchSong($songName);
        } else {
            $this->idSequence += 1;
            $playItem = new PlayItem($this->idSequence,$songName);
            $this->playItems[$songName] = $playItem;
            return $playItem;
        }
    }

    private function searchSong($songName)
    {
        foreach ($this->playItems as $item) {
            if(strcmp($songName,$item->getSongName()) == 0){
                return $songName;
            }
        }
        
    }

    public function getEnableFlyweight()
    {
        return $this->enableFlyweight;
    }

    public function setEnableFlyweight($enable)
    {
        $this->enableFlyweight = $enable;
    }
}