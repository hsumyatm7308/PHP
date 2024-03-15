<?php

echo __DIR__; //C:\xampp\htdocs\phpb3\part2\l25namespaceexercise

echo "<br>";

use gallery\slideshow as viewer;

spl_autoload_register(function ($classname) {
    echo "Loading the class = {$classname} <br>";

    $file = str_replace("\\", "/", $classname . ".php");

    echo $file;

    if (file_exists($file)) {
        require_once(__DIR__ . "/" . $file);
    } else {
        echo "No File Exists";
    }



});



$music = new music();
$music->play();

$photo = new gallery\photo();
$photo->play();

$portrait = new gallery\animateshow\portrait();
$portrait->play();

$image = new gallery\slideshow\image();
$image->play();

$picture = new viewer\picture();
$picture->play();


?>