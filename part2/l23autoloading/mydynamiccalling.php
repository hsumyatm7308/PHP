<?php 

// require_once ('./music.php');
// require_once ('./video.php');


spl_autoload_register(function($classname){
    echo "Loading the class = $classname <br>";
    require_once("$classname.php");

});

$music = new music();
$music->play();

$video = new video();
$video->play();



//** cant't call */
// $photo = new photo();
// $photo->play();


?>