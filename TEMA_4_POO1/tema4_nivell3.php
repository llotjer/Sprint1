<?php

require 'tema4_nivell3_classe_Cinema.php';
require 'tema4_nivell3_classe_Pelicula.php';

$verdi = new Cinema("Verdi", "Barcelona");
$coliseum = new Cinema("Coliseum", "Barcelona");

$robocop = new Pelicula("Robocop", "Paul Verhoeven", 1.42);
$martinH = new Pelicula("Martin (Hache)", "Adolfo Aristarain", 2.10);
$zatoichi = new Pelicula("Zatoichi", "Takeshi Kitano", 1.55);
$requiem = new Pelicula("Requiem for a Dream", "Darren Aronofsky", 1.02);
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

//Per a cada cinema, mostrar les dades de cada pel·lícula

    echo "<h3>Pel·lícules cinema: " . $verdi->getName() . "</h3>\n\n";
    for($i = 0; $i < $verdi->getFilmsLenght(); $i++){ 
        echo $verdi->getFilm($i)->__toString()."\n";

    }
    echo "Pel·lícules cinema: " . $coliseum->getName() . "\n\n";
    for($i = 0; $i < $coliseum->getFilmsLenght(); $i++){
        echo $coliseum->getFilm($i)->__toString()."\n";

    }

//Per a cada cinema, mostrar la pel·lícula amb major duració.
    
    $lengthsC1 = [];
    foreach($verdi->getFilms() as $film){
         
        array_push($lengthsC1, $film->getLength());
    }
    $maxLenght = max($lengthsC1); //amb la funció max aïllem el valor màxim de l'array.
    $filmMaxLenghtPos1 = array_search($maxLenght, $lengthsC1);
    echo "La pel·lícula amb major duració del cinema " . $verdi->getName() . " és " . $verdi->getFilm($filmMaxLenghtPos1)->getTitle() 
                                                                                    . " amb una duració de:" . $maxLenght . "h.\n\n";

    $lengthsC2 = [];
    foreach($coliseum->getFilms() as $film){ 

        array_push($lengthsC2, $film->getLength());
    }
    $maxLenght = max($lengthsC2);
    $filmMaxLenghtPos2 = array_search($maxLenght, $lengthsC2);
    echo "La pel·lícula amb major duració del cinema " . $coliseum->getName() . " és " . $coliseum->getFilm($filmMaxLenghtPos2)->getTitle() 
                                                                                              . " amb una duració de:" . $maxLenght . "h.";
    
    // Implementa una funció que cerqui pel nom del director/a pel·lícules en diferents cinemes. No cal repetir pel·lícules

    function searchByDirector($cinema, $director){
        foreach($cinema->getFilms() as $film){
            if($film->getDirector() == $director){
                echo "El cinema " . $cinema->getName() . ", té la pel·lícula:" . $film->getTitle();
            }
        }
    }