<?php

require 'tema4_nivell2_class_PokerDice.php';

$dices = [];
$shapes1 = [];
$shapes2 = [];
$shapes3 = [];
 

for($i = 0; $i < 5; $i++) {
    $dices[$i] = new PokerDice();
}

foreach ($dices as $dice) {

    $shape = $dice->throw();
    array_push($shapes1, $dice->shapeName($shape));
}

echo "<pre>";
print_r($shapes1) . "\n\n";
echo "</pre>";
echo "El número total de vegades que s'han tirat els daus és : " . $dice->getTotalThrows() . ".";

foreach ($dices as $dice) {

    $shape = $dice->throw();
    array_push($shapes2, $dice->shapeName($shape));
}

echo "<pre>";
print_r($shapes2) . "\n\n";
echo "</pre>";
echo "El número total de vegades que s'han tirat els daus és : " . $dice->getTotalThrows() . ".";

foreach ($dices as $dice) {

    $shape = $dice->throw();
    array_push($shapes3, $dice->shapeName($shape));
}

echo "<pre>";
print_r($shapes3) . "\n\n";
echo "</pre>";
echo "El número total de vegades que s'han tirat els daus és : " . $dice->getTotalThrows() . ".";



