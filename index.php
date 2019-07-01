<?php

//sa utilizam si sa instalam un package dinafara

include 'vendor/autoload.php';
use Intervention\Image\ImageManagerStatic as Image;
use ColorThief\ColorThief;
////////////////////////////////
$faker = Faker\Factory::create('ru_RU');
// var_dump($faker->userName);
// var_dump($faker->imageUrl(400,400));
// var_dump($faker->domainName);
// var_dump($faker->address);



//faker->image->intervention->local
Image::make($faker->imageUrl(400,400))->greyscale()
->save("download.jpg");
$dominantColor = ColorThief::getPalette("download.jpg", 5);// 5 culori

var_dump($dominantColor);


// acasa sa apara imaginea si patratelele de culori cu div

?>