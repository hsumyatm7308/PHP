<?php

require_once("gallery/photo.php");
require_once("gallery/animateshow/portrait.php");


use gallery\photo; //method 2 
use gallery\animateshow\portrait;



// method 1 
$photo = new gallery\photo();
$photo->play();

// method 2 
$photo = new photo();
$photo->play();


$portrait = new gallery\animateshow\portrait();
$portrait->play();


$portrait = new portrait();
$portrait->play();
?>