<?php

$students = ['Jordi' => [5,8,7,6,7], 'Pere' => [4,8,7,6,7], 'Maria' => [5,8,7,6,7]]; //es pot crear un array tant amb la sintaxi "array()" com "[]".

function getAveragePerStudent(array $students): array {
    
    $averagePerStudent = array();
    
    foreach ($students as $key => $value) { //sintaxi per recorrer un array associatiu, mitjançant un foreach, en php.
        $averagePerStudent[$key] = array_sum($value) / count($value);
    }
    return $averagePerStudent;
}

function getTotalAverage(array $students): float {
    
    $totalAverage = 0;
    
    foreach ($students as $value) { //en aquest cas només agafem els valors de l'array associada a cada key.
        $totalAverage += array_sum($value) / count($value);
    }
    return $totalAverage / count($students);
}

echo "La mitjana de cada un dels alumnes és: \n";
//print_r(getAveragePerStudent($students)); //la manera que te print_r de donar sortida a la informació, és força millorable en quant a llegeibilitat es refereix.

$averages = getAveragePerStudent($students); //d'aquesta manera podem imprimir per pantalla la mitjana de cada un dels alumnes, d'una manera més polida.
                                             
foreach($averages as $student => $average) {
    echo "\n$student => $average";
}

echo "\n\nLa mitjana de tots els alumnes és: " . getTotalAverage($students);

