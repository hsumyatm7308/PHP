<?php


function mycolor($col){
   if($col !== "red"){
    throw new Exception("I hate $col color");
   }
}

echo mycolor("red");



?>