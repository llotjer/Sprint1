<?php

$pos = 0;
$intNums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$intNumsCubed = array_map(function ($intNums){ //array_map no accepta una crida de funció, només una funció com a tal (sense nom). També anomenada LAMBDA o anónima.
    return pow($intNums, 3);
}, $intNums); 
foreach ($intNumsCubed as $value) {
    
    echo ($pos++ < count($intNumsCubed) - 1) ?  $value . ', ' : $value . '.';
}