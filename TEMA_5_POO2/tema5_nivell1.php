<?php

include "tema5_nivell1_interface.php";
include "tema5_nivell1_class_Dog.php";
include "tema5_nivell1_class_Cat.php";

$dog = new Dog('Dana');
$cat = new Cat('Mara');

$dogSpeak = $dog->makeSound();
$catSpeak = $cat->makeSound();

echo "Com fa la " . $dog->getName() . "? " . $dogSpeak . " i com fa la " . $cat->getName() . "? " . $catSpeak;
