<?php

class Alumne{

    private $nom;
    private $notes = array();

    public function __construct(string $nom){
        $this->nom = $nom;
    }

    public function getNom():string{
        return $this->nom;
    }

    public function getNotes():array{
        return $this->notes;
    }

    public function setNom(string $nom):void{
        $this->nom = $nom;
    }

    public function setNotes(array $notes):void{

        $this->notes[] = $notes;
    }
}