<?php

// array_chunk(); 
// array_chunk(array,size,preserve_key); 

$couples = ["aung aung", "su su ", "nu nu", "kyaw kyaw", "mya mya", "tun tun","maung maung","yin yin"];
echo "<pre>".print_r(array_chunk($couples,2),"false")."</pre>";
echo array_chunk($couples,2)[0][1];

echo "<pre>".print_r(array_chunk($couples,2,true),"true")."</pre>";
echo "<pre>".print_r(array_chunk($couples,2,false),"true")."</pre>";



// array_combine() Function 
                //  key , value 
// array_combine(array1,array2) Function 

$name = array("aung aung","su su","maung maung","hla hla");
$age = ["30","25","35","40"];

echo "<pre>".print_r(array_combine($name,$age),"true")."</pre>";
echo array_combine($name,$age)["aung aung"]; //30

echo "<hr>";

// $car = ["toyota","suzuki","mazada","force"];
$car = ["toyota","suzuki","mazada","force","force","suzuki"];
echo "<pre>".print_r(array_count_values($car),"true")."</pre>";
echo "<pre>".print_r(count($car),"true")."</pre>";




?>


