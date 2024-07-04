<?php

function isDiscerningByNotesPropertly(){

$response = "";
$nota = array(1,2,3,4,5,6,7,8,9,10);
$notaRandom = $nota[array_rand($nota)];
define("NOTA60", 6);
define("NOTA45", 4.5);
define("NOTA33", 3.3);

if($notaRandom >= NOTA60){
    $response = "Nota: " . $notaRandom . " - Grau : Primera Divisió.";
}elseif($notaRandom < NOTA60 && $notaRandom >= NOTA45){
    $response = "Nota: " . $notaRandom . " - Grau : Segona Divisió.";
}elseif($notaRandom < NOTA45 && $notaRandom >= NOTA33){
    $response = "Nota: " . $notaRandom . " - Grau : Tercera Divisió.";
}elseif($notaRandom < NOTA33){
    $response = "Nota: " . $notaRandom . " - L'alumne reprovarà.";
}

return $response;

}

echo discerningByNotes() . "<br>";
echo "<br>";