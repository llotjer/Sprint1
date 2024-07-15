<?php

$shoppingCartList = [];

function addChocolate(&$shoppingCart, int $value, string $key = 'chocolate'): void {

    $shoppingCart[$key] = $value;

}
function addCandy(&$shoppingCart, int $value, string $key = 'candy'): void {

    $shoppingCart[$key] = $value;

}
function addChewingGum(&$shoppingCart, int $value, string $key = 'chewingGum'): void {

    $shoppingCart[$key] = $value;

}

addChocolate($shoppingCartList, 10);
addCandy($shoppingCartList, 5);
addChewingGum($shoppingCartList, 3);

function shoppingCart(array $shoppingCartList): float {
    
    $sumValue = 0;

    foreach ($shoppingCartList as $key => $value) {
       
        if ($key === 'chocolate') {
           $sumValue += $value * 1;
        } elseif ($key === 'candy') {
            $sumValue += $value * 1.5;
        } elseif ($key === 'chewingGum') {
            $sumValue += $value * 0.5;
        }
    }
    return $sumValue;

}

echo "<pre>";
print_r(shoppingCart($shoppingCartList));
echo "</pre>";