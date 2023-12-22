<?php 


require_once("./mycustomload.php");

use gallery\animateshow as viewer;
use gallery\slideshow\picture;

mycustomload::loader("music");
$music = new music();
$music->play();


mycustomload::loader("video");
$video = new video();
$video->play();

mycustomload::loader("gallery\animateshow\portrait");
$portrait = new viewer\portrait();
$portrait->play();



mycustomload::loader("gallery\slideshow\picture");
$portrait = new picture();
$portrait->play();


?>