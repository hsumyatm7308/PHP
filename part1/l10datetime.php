<?php

// 1 Jun 197_

date_default_timezone_set("Asia/Yangon");

$getdate = getdate();
echo $getdate;
echo "<br>";
var_dump($getdate);
echo "<br>";

echo "This is seconds = ".$getdate["seconds"]."<br>";
echo "This is minutes = ". $getdate["minutes"]."<br>";
echo "This is hours = ". $getdate["hours"]."<br>";


echo "This is mon = ". $getdate["mon"]."<br>"; // month
echo "This is month = ". $getdate["month"]."<br>"; //March 
echo "This is mday = ". $getdate["mday"]."<br>"; // day of month

echo "This is year = ". $getdate["year"]."<br>"; //2023
echo "This is yday = ". $getdate["yday"]."<br>"; //61  day of the year

echo "This is weekday = ". $getdate["weekday"]."<br>"; //Friday
echo "This is wday = ". $getdate["wday"]."<br>"; //5  day of the week 0 = sunday 1=monday,....


echo "This is 0 = ". $getdate["0"]."<br>"; //1677841444



$time = time();
echo "This is time =".$time; // miliseconds

// date(format,timestap)
$date = date("a",$time);
echo "This is format a = ". $date . "<br>";
$date = date("A",$time);
echo "This is format a = ". $date . "<br>";

$date = date("d",$time);
echo "This is format d = ". $date . "<br>"; //03 //day leading zero

$date = date("D",$time);
echo "This is format D = ". $date . "<br>";  //FRI,SUN,etc..

$date = date("F",$time);
echo "This is format F = ". $date . "<br>";

$date = date("g",$time);
echo "This is format g = ". $date . "<br>";  //12 hour format (hour)

$date = date("G",$time);
echo "This is format G = ". $date . "<br>"; //24 hour format (hour)

$date = date("h",$time);
echo "This is format h = ". $date . "<br>"; // 05 //hour by number(by 12 hr format,leading 0)

$date = date("H",$time);
echo "This is format H = ". $date . "<br>"; //17 / hour by number (24 format ,leading 0)

$date = date("i",$time);
echo "This is format i = ". $date . "<br>"; //59

$date = date("j",$time);
echo "This is format a = ". $date . "<br>"; // day of moth no leading 0 

$date = date("l",$time);
echo "This is format l = ". $date . "<br>"; //Friday 

$date = date("L",$time);
echo "This is format L = ". $date . "<br>"; //0 //Leap Year (1 = true, 0 = false)

$date = date("m",$time);
echo "This is format m = ". $date . "<br>"; //day of month ,leading 0

$date = date("m",$time);
echo "This is format m = ". $date . "<br>"; //03 , leading 0 ,day of month 

$date = date("M",$time);
echo "This is format M = ". $date . "<br>";  //Mar (Jan/Feb)

$date = date("n",$time);
echo "This is format n = ". $date . "<br>"; // 3 // day of month ,no leading zero

$date = date("r",$time);
echo "This is format r = ". $date . "<br>";  //Fri, 03 Mar 2023 18:08:53 +0630


$date = date("s",$time);
echo "This is format s = ". $date . "<br>";  //seconds 

$date = date("U",$time);
echo "This is format U = ". $date . "<br>";  //miliseconds

$date = date("y",$time);
echo "This is format sy= ". $date . "<br>";  //23 shortcode

$date = date("Y",$time);
echo "This is format Y = ". $date . "<br>"; //2023 year

$date = date("z",$time);
echo "This is format z = ". $date . "<br>";  //61 / days of year 




// https://www.php.net/manual/en/timezones.php 
?>

<!-- 3TT  -->