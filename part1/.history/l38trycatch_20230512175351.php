<?php

ini_set("display_errors",1);

function mycolor($col){
   if($col !== "red"){
    throw new Exception("I hate $col color");
   }

   return "Yeah! my fav color is $col";
}

echo mycolor("red");

echo "<hr>"; 

function mynum($base,$power){
  
    if($power > 3){
        throw new Exception("We not allow over $power");
    }

    $result = pow($base,$power);

    return $result;
}

echo mynum(2,3);

echo "<hr>"; 

// => try..catch Statement 
// try{
// //    code to be exectued 
// }catch(Exception $e){
//     //   code to be exception is caught 
// }


function mycolour($col){
    if($col !== "red"){
        throw new Exception("I hate $col color.");
    }

    return "Yeach! my fa color is $col.";
}


// try{
//    echo mycolour("black");
// }catch(Exception $e){
//    echo "You should not try with this color.";
// }



try{
    echo mycolour("black");
 }catch(Exception $e){
    echo   $e->getMessage();
 }
 

echo "<hr>"; 


function mynumber($base,$power){
    if($power > 5){
        throw new Exception("We not allow over $power.");
    }

    $result = pow($base,$power);
    return $result;

}

try{
    echo mynumber(3,6);
}catch(Exception $e){
    echo "You should not over ".$e->getMessage();
}

echo "<hr>"; 

?>