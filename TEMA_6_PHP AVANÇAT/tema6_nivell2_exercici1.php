<?php

require 'tema6_nivell2_class_PhpInfo.php';

$obj1 = new Php_Info('Tema', 'PHP', 'Fitxer', 'www.php.com');
$obj2 = new Php_Info('Font', 'SQL', 'Vídeo', 'www.youtube.com');

echo 'El tema d\'aquest objecte és: ' . $obj1->getThemes() . "<br>";
echo 'La font d\'aquest objecte és: ' . $obj1->getResources() . "<br><br>";

echo 'El tema d\'aquest objecte és: ' . $obj2->getThemes() . "<br>";
echo 'La font d\'aquest objecte és: ' . $obj2->getResources() . "<br>";
