<?php

namespace App\Flyweight;

class PlayItem
{
    private $id;
    private $songName;
    private $song;

    public function __construct($id,$songName)
    {
        $this->id = $id;
        $this->songName = $songName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSongName()
    {
        return $this->songName;
    }
}