<?php 

// Exercici 1

$cognom = "Reynal";
$edat = 40;
$pi = 3.1416;
$boolean = true;

echo $cognom . "<br>", $edat . "<br>", $pi . "<br>", $boolean;

const NOM = "Xavi";

echo "<h1>" . NOM . "</h1>";

// Exercici 2

$greet = "Hello, World";
$str = "Aquest és el curs de PHP";

echo $greet . "<br>";
echo strtoupper($greet) . "<br>";
echo strlen($greet) . "<br>";
echo strrev($greet) . "<br>";
echo $greet . " " . $str . "<br>";


// Exercici 3

$x = 1;
$y = 2;
$n = 1.2;
$m = 2.1;

echo "Valor de cada variable: " . $x . ", ", $y . ", ", $n . ", ", $m . "<br>";
echo "Valor de la suma entre variables x i y, i n i m: " . $x + $y . ", ", $n + $m . "<br>";
echo "Valor de la resta entre variables x i y, i n i m: " . $x - $y . ", ", $n - $m . "<br>";
echo "Valor del producte entre variables x i y, i n i m: " . $x * $y . ", ", $n * $m . "<br>";
echo "Valor del mòdul entre variables x i y, i n i m: " . $x % $y . ", ", $n % $m . "<br>";

echo "El doble de cada variable: " . $x * 2 . ", ", $y * 2 . ", ", $n * 2 . ", ", $m * 2 . "<br>";
echo "Valor de la suma entre totes les variables: " . $x + $y + $n + $m . "<br>";
echo "Valor del producte entre totes les variables: " . $x * $y * $n * $m . "<br>";


$array = ['+', '-', '*', '/', '%'];
$operant = array_rand($array);
echo $operant;

