<?php 

echo "<h3>Exercici 1</h3>" . "<br>";

$surname = "Reynal";
$age = 40;
$pi = 3.1416;
$boolean = true;

echo $surname . "<br>", $age . "<br>", $pi . "<br>", $boolean;

const NAME = "Xavi";

echo "<h1>" . NAME . "</h1>";

echo "<h3>Exercici 2</h3>" . "<br>";

$greet = "Hello, World";
$str = "Aquest és el curs de PHP";

echo $greet . "<br>";
echo strtoupper($greet) . "<br>";
echo strlen($greet) . "<br>";
echo strrev($greet) . "<br>";
echo $greet . ". " . $str . "<br>";
echo "<br>";

echo "<h3>Exercici 3</h3>" . "<br>";

echo "<h5>a)</h5>" . "<br>";

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
echo "<br>";

echo "<h5>b)</h5>" . "<br>";

$operator = array('+', '-', '*', '/', '%');
$randomOperator = $operator[rand(0, count($operator) - 1)];
function calculate(int $x, int $y, string $randomOperator) : String{

    $response = "";

    if($randomOperator == '+'){
        $response =  "El resultat de la suma és : " . $x + $y;
    }elseif($randomOperator == '-'){
        $response = "El resultat de la resta és : " . $x - $y;
    }elseif($randomOperator == '*'){
        $response = "El resultat de la multiplicació és : " . $x * $y;
    }elseif($randomOperator == '/'){
        $response = "El resultat de la divisió és : " . $x / $y;
    }else{
        $response = "Operador incorrecte.";
    }

    return $response;
}

echo calculate($x, $y, $randomOperator) . "<br>";
echo "<br>";

echo "<h3>Exercici 4</h3>" . "<br>";

function counting(){

    $inc = array(0, 1, 2, 3);
    $incRandom = $inc[array_rand($inc)];
    $inc = $incRandom;
    $count = "";
    $sum = 0;

    for($i = 1; $i <= 10; $i = $i + $inc){
       
        $sum += $i;
        $count .= ($i == 10 || ($i == 9 && $inc == 2)) ? strval($i) : strval($i) . " + " ;
        
    }
    return $count . " = " . $sum . "<br>" . "La suma ha estat de " . $inc . " en " . $inc . ".";
}
   
echo counting() . "<br>";
echo "<br>";

echo "<h3>Exercici 5</h3>" . "<br>";

function grau(){

$response = "";
$nota = array(1,2,3,4,5,6,7,8,9,10);
$notaRandom = $nota[array_rand($nota)];
$NOTA60 = 6;
$NOTA45 = 4.5;
$NOTA33 = 3.3;

if($notaRandom >= $NOTA60){
    $response = "Nota: " . $notaRandom . " - Grau : Primera Divisió.";
}elseif($notaRandom < $NOTA60 && $notaRandom >= $NOTA45){
    $response = "Nota: " . $notaRandom . " - Grau : Segona Divisió.";
}elseif($notaRandom < $NOTA45 && $notaRandom >= $NOTA33){
    $response = "Nota: " . $notaRandom . " - Grau : Tercera Divisió.";
}elseif($notaRandom < $NOTA33){
    $response = "Nota: " . $notaRandom . " - L'alumne reprovarà.";
}

return $response;

}

echo grau() . "<br>";
echo "<br>";

echo "<h3>Exercici 6</h3>" . "<br>";

function isBitten(){

    $prob = rand(0,1);
    $bitten = false;

    if($prob == 1){
        $bitten = true;
    }
   
    return $bitten;
}

if(isBitten()){
    echo "Charlie bites you!";
}else{
    echo "Charlie didn't bite you...";
}
