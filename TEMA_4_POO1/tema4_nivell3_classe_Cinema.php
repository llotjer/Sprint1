<?php

class Cinema{

    private $name;
    private $location;
    private $films;

    public function __construct(string $name, string $location){
        $this->name = $name;
        $this->location = $location;
        $this->films = [];
    }

    public function getName(): string{
        return $this->name;
    }

    public function getFilm(int $film): Pelicula{
        return $this->films[$film];
    }

    public function getFilms(){
        return $this->films;
    }

    public function getFilmsLenght(): int{
        return count($this->films);
    }

    public function addFilm(Pelicula $film){
        array_push($this->films, $film);
    }

    public function longestFilm(): string{
    $lengths = [];
        foreach($this->films as $film){
            
            array_push($lengths, $film->getLength());
        }
    $maxLenght = max($lengths); //amb la funció max aïllem el valor màxim de l'array.
    $filmMaxLenghtPos = array_search($maxLenght, $lengths);
    return "La pel·lícula amb major duració del cinema " . $this->name . " és " . $this->films[$filmMaxLenghtPos]->getTitle() 
                                                                                    . " amb una duració de: " . $maxLenght . "h.<br>";
    }

    public function searchByDirector(string $director):string{
        
        $resposta = "";
            
        foreach($this->films as $film){
            
            if($film->getDirector() == $director){
                    $resposta = "El cinema " . $this->name . ", té la pel·lícula:" . $film->getTitle() . " del director " . $film->getDirector() . ".";
            }
        }
        return $resposta;

    }
}