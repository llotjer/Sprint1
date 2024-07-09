<?php

abstract class Animal{

    //PROPERTIES

    protected $name;
    protected $sound;

    //CONSTRUCTOR

    public function __construct($name){
        $this->name = $name;
    }

    public abstract function makeSound(): string;
}