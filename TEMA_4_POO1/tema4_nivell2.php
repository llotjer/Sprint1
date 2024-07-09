<?php

require 'tema4_nivell2_class_PokerDice.php';

$dices = [];
//$throws = [];
$shapes = [];

$dice1 = new PokerDice();
$dice2 = new PokerDice();
$dice3 = new PokerDice();
$dice4 = new PokerDice();
$dice5 = new PokerDice();

array_push($dices, $dice1, $dice2, $dice3, $dice4, $dice5);

foreach ($dices as $dice) {
    $diceThrows += 1;
    $shape = $dice->throw();
    array_push($shapes, $dice->shapeName($shape));
    echo $dice->shapeName($shape) . "\n";
    /* array_push($throws, $diceThrows);
    array_push($dices, $throws, $shapes); */
    //$dice->setTotalThrows($shape);
}

//print_r($dices[0]->getTotalThrows());
print_r($dices);
print_r($throws);
print_r($shapes);