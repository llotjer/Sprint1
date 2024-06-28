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
echo $nums;

