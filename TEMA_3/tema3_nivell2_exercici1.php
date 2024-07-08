<?php

$array1 = array(1,2,3,4,5,6,7,8,9,10);
$array2 = array(0,2,6,8,11,14);

$resultIntersection = array_intersect($array1, $array2);
$resultMerge = array_merge($array1, $array2);
print_r($resultIntersection);
sort($resultMerge);
print_r($resultMerge);