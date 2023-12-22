<?php

require_once("gallery/photo.php");


use gallery\photo; //method 2 



// method 1 
$photo = new gallery\photo();
$photo->play();

// method 2 
$photo = new photo();
$photo->play();

?>