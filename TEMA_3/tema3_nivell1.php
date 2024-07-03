<?php

echo "<h3>Exercici 1</h3><br>";

$nums = array(1,2,3,4,5);

foreach($nums as $num){
    echo $num . "<br>";
}

echo "<h3>Exercici 2</h3><br>";

$X = array (10, 20, 30, 40, 50, 60);
$nums = count($X);
echo $nums . "<br>";
unset($X[2]);
$X = array_values($X);
print_r($X);
echo "<br>";
$nums = count($X);
echo $nums . "<br>";

echo "<h3>Exercici 3</h3><br>";

$words = array("hola", "PHP", "html");
$specialChar = 'h';

function checkSpecialChar(array $words, string $specialChar) : bool{
    
    $match = true;

    foreach($words as $word){

        if(stripos($word, $specialChar) === false){
            return false;
        }
    }

    return $match;

}

if(checkSpecialChar($words, $specialChar) !== false){
    echo "true" . "<br>";
} else {
    echo "false" . "<br>";
}


echo "<h3>Exercici 4</h3><br>";

$info = array("name" => "Xavi", "age" => "40", "email" => "itacademy@gmail.com", "pref meal" => "pizza");

echo "<pre>";
print_r($info);
echo "</pre>";

