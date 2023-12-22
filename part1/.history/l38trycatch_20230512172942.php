<?php


function mycolor($col){
   if($col !== "red"){
    throw new Exception("I hate $col color");
   }

   return "Yeah! my fav color is $col";
}

echo mycolor("red");

echo "<hr>"; 

function mynum(){
    
}


?>