<?php

//abs() Function 
// abs(number) 

echo abs(32.75) . "<br>";
echo abs(-32.75) . "<br>"; //32.75 
echo abs(32) . "<br>"; //32.75 
echo abs(-32) . "<br>"; //32.75 

echo "<hr>"; 

// round() Function 
// round(number)

echo round(32.75) . "<br>";
echo round(32.44) . "<br>";
echo round(32.45) . "<br>";

echo "<hr>"; 


// ceil() Function 
// ceil(number) 
echo ceil(32.75) . "<br>";
echo ceil(32.44) . "<br>";
echo ceil(-32.45) . "<br>";


echo "<hr>"; 


// floor() Function 
// floor(number) 
echo floor(32.75) . "<br>";
echo floor(32.44) . "<br>";
echo floor(-32.45) . "<br>";

echo "<hr>"; 


// max() Function 
// max(number)
echo max(32.75,1,3,10,'100') . "<br>";
echo max(32.44,1900,"100",3,-19) . "<br>";

echo "<hr>"; 


// min() Function 
// min(number)
echo min(32.75,1,3,10) . "<br>";
echo min(32.44,1900,3,-19) . "<br>";

echo "<hr>"; 


// pow() Funciton 
// pow(x,y);
echo pow(2,4) . "<br>";
echo pow(3,4) . "<br>";

echo "<hr>"; 


// sqrt() Funciton 
// sqrt(number);
echo sqrt(2) . "<br>";
echo sqrt(0.81) . "<br>";
echo sqrt(-0.81) . "<br>";


echo "<hr>"; 


// rand() Funciton 
// rand() or rand(min,max)
echo rand() . "<br>";
echo rand(0,100) . "<br>";
echo rand(100,1000) . "<br>";



?>
