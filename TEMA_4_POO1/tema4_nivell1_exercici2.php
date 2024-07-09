<?php

require 'tema4_nivell1_exercici2_classe_Shape.php';
require 'tema4_nivell1_exercici2_classe_Triangle.php';
require 'tema4_nivell1_exercici2_classe_Rectangle.php';

$triangle = new Triangle(3, 4);
$rectangle = new Rectangle(6, 5);

$triangleArea = $triangle->area();
$rectangleArea = $rectangle->area();

echo "L'àrea del triangle és : " . $triangleArea . "\n". "L'àrea del rectangle és : " . $rectangleArea;
