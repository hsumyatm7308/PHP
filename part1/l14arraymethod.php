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


echo "<hr>";

// array_diff() Function 
// array_diff(array1,array2,array3,...) 
// Note:we don't need to consider any index of keyname' 

$colors1 = ["red","green","blue","pink"];
$colors2 = ["red","blue","pink","silver"];
$colors3 = ["green","blue","pink","violet"];
echo "<pre>".print_r(array_diff($colors1,$colors2),"true")."</pre>"; //green 
echo "<pre>".print_r(array_diff($colors2,$colors1),"true")."</pre>"; //silver
echo "<pre>".print_r(array_diff($colors1,$colors2,$colors3),"true")."</pre>"; //no 

 
$col1 = array("a" => "red","b"=>"green","c"=>"blue","d"=>"yellow");
$col2 = array("e"=>"red","f"=>"green","g"=>"black");
echo "<pre>".print_r(array_diff($col1,$col2),"true")."</pre>"; //blue yellow  
echo "<pre>".print_r(array_diff($col2,$col1),"true")."</pre>"; //black  

echo "<hr>";

// array_diff_assoc() Function 
// array_diff_assoc(array1,array2,array3,...) 
$col1 = array("a" => "red","b"=>"yellow","c"=>"blue","d"=>"green"); 
$col2 = array("a" => "red","b"=>"green","c"=>"blue"); 

echo "<pre>".print_r(array_diff_assoc($col1,$col2),"true")."</pre>"; //yellow green   
echo "<pre>".print_r(array_diff_assoc($col2,$col1),"true")."</pre>"; //green 

echo "<hr>";

// array_diff_key() 
$col1 = array("a" => "red","b"=>"yellow","c"=>"blue","d"=>"green","f"=>"pink"); 
$col2 = array("a" => "red","b"=>"green","c"=>"blue","e"=>"orange"); 

echo "<pre>".print_r(array_diff_key($col1,$col2),"true")."</pre>"; //gray pink   
echo "<pre>".print_r(array_diff_key($col2,$col1),"true")."</pre>"; //orange 





?>


