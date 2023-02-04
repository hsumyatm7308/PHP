<?php

// Arithmetic Operators 
// + - * / % 

$num1 = 100;
$num2 = 200;
$num3 = 30.4;
$city = "Bagan";
$car = false;
$myarrs = ['maung maung','kyaw kyaw'];
$colors = array('red','blue','green');


echo $num1;
echo $num2;
echo "<br/>";
echo $num1 + $num2;
echo "<br/>";
echo $num1 - $num2;
echo "<br>";
echo $num1 * $num2;
echo "<br>";
echo $num1 / $num2;
echo "<br>";
echo $num1 % $num2;




var_dump($num1);
echo "<br/>";
var_dump($num1,$num2);
echo "<br/>";
echo var_dump($num1);
echo "<br/>";
echo var_dump($city); //String(5) "Bagan"    5 is length
echo "<br/>";
echo var_dump($num3); 
echo "<br/>";
echo var_dump($myarrs); //array(2) { [0]=> string(11) "maung maung" [1]=> string(9) "kyaw kyaw" }
echo "<br/>";
echo var_dump($colors);
echo "<br/>";


$num4 = true;  //true = 1 , false =0
$num7 = false;
$num5 = "10";
$num6 = "20";

var_dump($num5,$num6);  //String
echo "<br/>";
echo $num6 + $num5;  //result = 30 
echo "<br/>";
echo $num6 - $num5 ; //result = 10
echo "<br/>";
echo $num4 + $num5; //result = 11
echo "<br/>";
echo $num7 * $num5;
echo "<br/>";

var_dump($num5+$num6);


// Overwrite or Reasing
$num5 = 50;
$num6 = "60";
echo "<br/>";

var_dump($num5,$num6);
echo "<br/>";
echo $num5+$num6; //result = 110
echo "<br/>";
var_dump($num5+$num6) // int
?>