<?php

$strings = ["Program","PHP","Java","javascript","bootcamp","html","CSS"];

$evenStrings = array_filter($strings, function($string) {
    return strlen($string) % 2 == 0;
});

foreach($evenStrings as $string){
    echo $string . "\n";
}