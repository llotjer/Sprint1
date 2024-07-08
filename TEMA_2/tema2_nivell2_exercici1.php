<?php

define("SEG",1);
define("MIN",SEG*60);

$tempsTrucada = MIN * rand(1,180); // Calculating call duration from 1 minute to 3 hours.

function costTrucada(int $tempsTrucada):string{

    $dif = $tempsTrucada - MIN*3;
    $cost = 10;

    if($tempsTrucada < MIN*3){
        return "El cost de la trucada és de " . $cost . " cèntims.";
    }else{
        $cost = $dif*5/100 + 0.10;
        return "El cost de la trucada és de " . $cost . " €.";
        
    }
}

echo costTrucada($tempsTrucada);