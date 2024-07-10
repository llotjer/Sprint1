<?php

//src : https://image.intervention.io/v3

require 'vendor/autoload.php';

//use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManagerStatic as Image;


// create image manager with desired driver
$manager = new Image(new Driver());

// read image from file system
$image = $manager->read('./apple_canvasprv.jpg');

// resize image proportionally to 500px width
$image->scale(width: 550);

// insert watermark
$waterMark = $manager->make('./top_secret.png');
$image->insert($waterMark, 'center');

// save modified image in new format 
$image->toPng()->save('./apple_canvasprv_modificado.png');

