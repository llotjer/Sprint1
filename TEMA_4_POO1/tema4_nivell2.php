<?php

require 'tema4_nivell2_class_PokerDice.php';

$dices = [];
$shapes1 = [];
$shapes2 = [];
$getTotalThrows = 0; // Se que demanes un mètode, però m'ha semblat que així queda molt més simplificat.

for($i = 0; $i < 5; $i++) {
    $dices[$i] = new PokerDice();
}

foreach ($dices as $dice) {
    ++$getTotalThrows;
    $shape = $dice->throw();
    array_push($shapes1, $dice->shapeName($shape));
    //echo $dice->shapeName($shape) . "\n";
}

echo "<pre>";
print_r($shapes1) . "\n\n";
echo "</pre>";
echo "El número total de vegades que s'han tirat els daus és : " . $getTotalThrows . ".";

foreach ($dices as $dice) {
    ++$getTotalThrows;
    $shape = $dice->throw();
    array_push($shapes2, $dice->shapeName($shape));
    //echo $dice->shapeName($shape) . "\n";
}

echo "<pre>";
print_r($shapes2) . "\n\n";
echo "</pre>";
echo "El número total de vegades que s'han tirat els daus és : " . $getTotalThrows . ".";