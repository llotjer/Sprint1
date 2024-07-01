<?php

$name = $_REQUEST['name'];
$dni = $_REQUEST['dni'];
$age = $_REQUEST['age'];

//echo $name . "<br>" . $dni . "<br>" . $age . "<br>";

$array = array ('name' => $name, 'dni' => $dni, 'age' => $age);

$_SESSION['sessió1'] = $array;

//echo $_SESSION['sessió1'];

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";