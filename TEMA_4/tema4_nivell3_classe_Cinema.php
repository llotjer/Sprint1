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
}