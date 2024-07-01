<?php

//INITIALLY, I CREATED AN ABSTRACT CLASS NAMED ANIMAL WITH AN ABSTRACT METHOD CALLED MAKESOUND. 
//HOWEVER, I REALIZED THAT I DIDN’T NEED AN ENTIRE CLASS. I JUST NEEDED A METHOD FOR THE DOG AND CAT CLASSES 
//TO MAKE THEIR RESPECTIVE SOUNDS. THIS CAN BE ACHIEVED USING AN INTERFACE.

interface sound{
    public function makeSound(): string;
}


class Dog implements sound{
    
    //PROPERTIES
    private $name;
    private $sound;

    //CONSTRUCTOR
    public function __construct($name){
       $this->sound = 'BUP, BUP!';
       $this->name = $name;
    }

    //GETTERS
    public function getName(): string{
        return $this->name;
    }

    public function getSound(): string{
        return $this->sound;
    }

    //SETTERS
    public function setName(string $name): void{
        $this->name = $name;
    }

    public function setSound(string $sound): void{
        $this->sound = $sound;
    }

    //METHOD
    public function makeSound(): string{
        return $this->sound;
    }
}

class Cat implements sound{

    //PROPERTIES
    private $name;
    private $sound;

    //CONSTRUCTOR
    public function __construct($name){
        $this->sound = 'MEU!';
        $this->name = $name;
    }

    //GETTERS
    public function getName(): string{
        return $this->name;
    }

    public function getSound(): string{
        return $this->sound;
    }

    //SETTERS
    public function setName(string $name): void{
        $this->name = $name;
    }

    public function setSound(string $sound): void{
        $this->sound = $sound;
    }

    //METHOD
    public function makeSound(): string{
        return $this->sound;
    }
}

?>