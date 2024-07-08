<?php

class Pelicula{

    private $title;
    private $director;
    private $length;

    public function __construct(string $title, string $director, float $length){
        $this->title = $title;
        $this->director = $director;
        $this->length = $length;
    }

    public function getTitle():string{
        return $this->title;
    }

    public function getDirector():string{
        return $this->director;
    }

    public function getLength():float{
        return $this->length;
    }

    public function __toString(){
        return "Title: " . $this->title . "\nDirector: " . $this->director . "\nLength: " . $this->length . "h\n";
    }


}