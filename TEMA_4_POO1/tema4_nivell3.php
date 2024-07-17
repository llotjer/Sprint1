<?php

require 'tema4_nivell3_classe_Cinema.php';
require 'tema4_nivell3_classe_Pelicula.php';

$cines = [];

$verdi = new Cinema("Verdi", "Barcelona");
$coliseum = new Cinema("Coliseum", "Barcelona");

array_push($cines, $verdi, $coliseum);



$robocop = new Pelicula("Robocop", "Paul Verhoeven", 1.42);
$martinH = new Pelicula("Martin (Hache)", "Adolfo Aristarain", 2.10);
$zatoichi = new Pelicula("Zatoichi", "Takeshi Kitano", 1.55);
$requiem = new Pelicula("Requiem for a Dream", "Darren Aronofsky", 1.41);
$nueveReinas = new Pelicula("9 reinas", "Fabián Bielinsky", 1.54);
$amoresPerros = new Pelicula("Amores Perros", "Alejandro González Iñárritu", 2.30);
$akira = new Pelicula("Akira", "Katsuhiro Ōtomo", 2.04);
$lunesSol = new Pelicula("Los lunes al sol", "Fernando León de Aranoa", 1.53);
$odiosos8 = new Pelicula("The hateful eight", "Quentin Tarantino", 3.07);
$malparits = new Pelicula("Unglorious Bastards", "Quentin Tarantino", 2.33);


$verdi -> addFilm($martinH);
$verdi -> addFilm($nueveReinas);
$verdi -> addFilm($amoresPerros);
$verdi -> addFilm($lunesSol);
$verdi -> addFilm($odiosos8);


$coliseum -> addFilm($robocop);
$coliseum -> addFilm($zatoichi);
$coliseum -> addFilm($requiem);
$coliseum -> addFilm($akira);
$coliseum -> addFilm($malparits);



    echo "<h3>Pel·lícules cinema: " . $verdi->getName() . "</h3>\n\n";
    for($i = 0; $i < $verdi->getFilmsLenght(); $i++){ 
        echo $verdi->getFilm($i)->__toString()."<br>";

    }
    echo "<h3>Pel·lícules cinema: " . $coliseum->getName() . "</h3>\n\n";
    for($i = 0; $i < $coliseum->getFilmsLenght(); $i++){
        echo $coliseum->getFilm($i)->__toString()."<br>";

    }

    echo $verdi->longestFilm() . "<br>";
    echo $coliseum->longestFilm() . "<br>";

    foreach($cines as $cine){
        
        echo $cine->searchByDirector("Quentin Tarantino") . "<br>";
    
    }
    

