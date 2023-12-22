<?php 
// use app\gallery\slideshow\image;

require_once("./vendor/autoload.php");

use app\music;
use app\video; 
use app\gallery\slideshow as slider;
use app\gallery\slideshow\picture;
use app\Models\Article;
use config\auth;


$music = new music();   
$music->play();


$music = new video();
$music->play();


$image = new slider\image();
$image->play(); 


$picture = new picture();
$picture->play();


$article = new Article();
$article->play();

$auth = new auth();
$auth->index();




?>

<!-- composer dump-autoload  -->
<!-- composer dump-autoload -o -->

