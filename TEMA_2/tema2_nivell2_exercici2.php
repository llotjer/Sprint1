<?php

//I really think that’s what the statement said we had to do.

$chocolate = 1;
$candy = 1.5;
$chewingGum = 0.5;

function shoppingCart(int $chocolate, float $candy, float $chewingGum):float {

    return $chocolate*2 + $candy + $chewingGum;

}

echo shoppingCart($chocolate, $candy, $chewingGum);