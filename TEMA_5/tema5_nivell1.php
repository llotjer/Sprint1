<?php

abstract class Animal{

    public $cry;

    public function __construct(string $cry){
        $this->cry = $cry;
    }

    public abstract function toCry();

}

class Dog extends Animal{

    public function __construct($cry){
        parent::__construct($cry);
    }
    public function toCry(): string{
        return 'BuP, BUP!';
    }
}

class Cat extends Animal{

    public function __construct($cry){
        parent::__construct($cry);
    }
    public function toCry(): string{
        return 'Meu!';
    }
}

?>