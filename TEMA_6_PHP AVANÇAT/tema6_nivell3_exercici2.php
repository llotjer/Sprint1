<?php

//src : https://image.intervention.io/v3

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

// create image manager with desired driver
$manager = new ImageManager(new Driver());

// read image from file system
$image = $manager->read('/apple_canvasprv.jpg');

// resize image proportionally to 500px width
$image->scale(width: 500);

// insert watermark
$image->place('/classified.webp');

// save modified image in new format 
$image->toPng()->save('\apple_canvasprv_modificado.png');
