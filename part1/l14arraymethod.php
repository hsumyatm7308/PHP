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

echo "<hr>";


// array_intersect() Function 
// array_intersect(array1,array2,array3,...) 

$num1 = [10,20,30,60,70,80];
$num2 = array(10,20,30,40,50,80,90);

echo "<pre>".print_r(array_intersect($num1,$num2),"true")."</pre>"; //10 20 30 80    
echo "<pre>".print_r(array_intersect($num2,$num1),"true")."</pre>"; //10 20 30 80    


$col1 = array("a" => "red","b"=>"yellow","c"=>"blue","d"=>"green","f"=>"pink"); 
$col2 = array("a" => "red","b"=>"green","c"=>"blue","e"=>"orange"); 


echo "<pre>".print_r(array_intersect($col1,$col2),"true")."</pre>"; //red blue green   
echo "<pre>".print_r(array_intersect($col2,$col1),"true")."</pre>"; //red green blue 


// array_fill() Funtion 
// array_fill(index,number,value); 

echo "<pre>".print_r(array_fill(0,5,"green"),"true")."</pre>"; //2 blue 3 blue ... 6 blue
echo "<pre>".print_r(array_fill(0,5,"blue"),"true")."</pre>"; //2 blue 3 blue ... 6 blue

// array_fill_keys() Function 
// array_fill_keys(key,value) 
$keys = array("a","b","c","d");
echo "<pre>".print_r(array_fill_keys($keys,"green"),"true")."</pre>"; //a green b green .... 


// array_filter() Function 
// array_filter(array,callbackfunction,flag) 

$num = [1,2,3,4,3];

function getodd($var){
    return($var & 1);
}

echo "<pre>".print_r(array_filter($num,"getodd"),"true")."</pre>";
echo "<hr>";



// array_key_exists() Function 
// array_key_exists(key,array) 

$phones = ["Mpt"=> "fifth","ooredoo"=>"broadban"];

if(array_key_exists("mpt",$phones)){
    echo "key exists";
}else{
    echo "key does not exists";
}

echo "<hr>";

// array_keys() Function 
// array_key(array,value,strict) 

$phones = ["mpt"=>"fifth","ooredoo"=>"broadban","ais"=>"wifi"];

echo "<pre>".print_r(array_keys($phones),"true")."</pre>";
echo array_keys($phones)[0]; //mpt

echo "<pre>".print_r(array_keys($phones,"broadban"),"true")."</pre>";
echo array_keys($phones,"broadban")[0]; //ooredoo

$numbers = [10,20,30,"10"];

echo "<pre>".print_r(array_keys($numbers,"10",true),"true")."</pre>"; 
echo "<pre>".print_r(array_keys($numbers,10,true),"true")."</pre>";


echo "<pre>".print_r(array_keys($numbers,10,false),"true")."</pre>"; 
echo "<pre>".print_r(array_keys($numbers,10,false),"true")."</pre>"; 

echo "<hr>";


// array_map() Function 
// array_map(callbackfunction,array1,array2,....) 

$males = ["Tun Tun","Zaw Zaw","Aung Aung","kyaw","Thura"];
$female = ["Hla Hla","Aye Zaw","Su Aung","Thu","Yu Yu"];

function genderone($name){
    return("Mr.".$name);
}

function gendertwo($male,$female){
    return ($male."&".$female);
}


echo "<pre>".print_r(array_map("genderone",$males),"true")."</pre>";
echo "<pre>".print_r(array_map("gendertwo",$males,$female),"true")."</pre>";
echo "<hr>";


// array_marge() Function 
// array_marge(array1,array2,array3,..) 

$arr1 = ["red","green"];
$arr2 = array("blue","yellow");
$arr3 = ["orange","violet"];

echo "<pre>".print_r(array_merge($arr1,$arr2),"true")."</pre>"; // [0] => red
// [1] => green
// [2] => blue
// [3] => yellow
echo "<pre>".print_r(array_merge($arr1,$arr2,$arr3),"true")."</pre>"; //  [0] => red
// [1] => green
// [2] => blue
// [3] => yellow
// [4] => orange
// [5] => violet


// array_multisort()  Function 
// array_multisort(array) 

$animals = ["Dog","Cat","Mouse","Lion","Zebra","Rat","Bear","Cow"];

array_multisort($animals);

echo "<pre>".print_r($animals,"true")."</pre>"; //a to z

echo "<hr>";

$numbers = [10,20,30,50,100,40,250,120];
array_multisort($numbers);
echo "<pre>".print_r($numbers,"true")."</pre>"; // 0 to 10 


$numbers = [10,"20",30,50,"100",40,250,120];
array_multisort($numbers);
echo "<pre>".print_r($numbers,"true")."</pre>"; // 0 to 10 



// sort() Function 
// sort(array) 

$cars = ["volvo","bmw","toyota","mazada","suzuki"];
sort($cars);
echo "<pre>".print_r($cars,"true")."</pre>"; 

$numbers = array(10,50,"80","90",100, "130","250",70);
echo "<pre>".print_r($numbers,"true")."</pre>"; 

echo "<hr>";


// array_pad() Function 
// array_pad(array,size,value) 
$colors = ["red","green"];
echo "<pre>".print_r(array_pad($colors,5,"blue"),"true")."</pre>";

echo "<hr>";

// array_pop() Function 
// array_pop(array) 

$colors = ["red","green","blue"];
array_pop($colors);
echo "<pre>".print_r($colors,"true")."</pre>"; //red green



// array_reduce() Function 
// array_reduce(array,callbackfunction,initial) 

$num = [10,"20",30];

function calfun($total,$val){
    return $total += $val;
}

echo "<pre>".print_r(array_reduce($num,"calfun",0),"true")."</pre>"; 

echo "<hr>";


// array_reverse() Function 
// array_reverse(array) 

$arr = ["a","b","g","e"];
echo "<pre>".print_r(array_reverse($arr),"true")."</pre>";



$arr = ["a"=>"red","b"=>"green","g"=>"violet","c"=>"blue"];
echo "<pre>".print_r(array_reverse($arr),"true")."</pre>";

echo "<hr>";


// array_search() Function 
// array_search(value,array) 

$arr = ["a","b","g","e"];
echo "<pre>".print_r(array_search("b",$arr),"true")."</pre>";



$arr = ["a"=>"red","b"=>"green","g"=>"violet","c"=>"blue"];
echo "<pre>".print_r(array_search("green",$arr),"true")."</pre>";

echo "<hr>";



// array_shift() Function 
// array_shift(array) 

$colors = array("red","green","blue");
array_shift($colors);
echo "<pre>".print_r($colors,"true")."</pre>";

$arr = ["a"=>"red","b"=>"green","g"=>"violet","c"=>"blue"];
array_unshift($arr);

echo "<pre>".print_r($arr,"true")."</pre>";


echo "<hr>";


// array_unshift() Function 
$colors = array("red","green","blue");
array_unshift($colors);
echo "<pre>".print_r($colors,"true")."</pre>";

$arr = ["a"=>"red","b"=>"green","g"=>"violet","c"=>"blue"];
array_unshift($arr,"silver");
echo "<pre>".print_r($arr,"true")."</pre>";



$arr = ["1"=>"red","2"=>"green","3"=>"violet","4"=>"blue"];
array_unshift($arr,"brown");
echo "<pre>".print_r($arr,"true")."</pre>";



echo "<hr>";


// array_push() Function 
// array_push(array,value1,value2,value3,...)
$colors = array("red","green","blue");
array_push($colors,"black");
echo "<pre>".print_r($colors,"true")."</pre>";

$arr = ["a"=>"red","b"=>"green","g"=>"violet","c"=>"blue"];
array_push($arr,"silver");
echo "<pre>".print_r($arr,"true")."</pre>";



$arr = ["1"=>"red","2"=>"green","3"=>"violet","4"=>"blue"];
array_push($arr,"brown");
echo "<pre>".print_r($arr,"true")."</pre>";

 

echo "<hr>";


// array_slice() Function 
// array_slice(array,start,length,preserve) 

$colors = array("red","green","blue","yellow","black");

echo "<pre>".print_r(array_slice($colors,0),"true")."</pre>"; //red to black 
echo "<pre>".print_r(array_slice($colors,2),"true")."</pre>"; //blue to black 

echo "<pre>".print_r(array_slice($colors,-1),"true")."</pre>"; // black 
echo "<pre>".print_r(array_slice($colors,-2),"true")."</pre>"; // yellow black 
echo "<pre>".print_r(array_slice($colors,-5),"true")."</pre>"; // red to black 

echo "<pre>".print_r(array_slice($colors,0,2),"true")."</pre>"; // red green  
echo "<pre>".print_r(array_slice($colors,2,2),"true")."</pre>"; // blue yellow   
echo "<pre>".print_r(array_slice($colors,2,5),"true")."</pre>"; // blue yellow  black nothing 


echo "<pre>".print_r(array_slice($colors,2,2,true),"true")."</pre>"; // blue yellow   
echo "<pre>".print_r(array_slice($colors,2,2,false),"true")."</pre>"; // blue yellow   


// array_splice() Function 
                    // idx 
// array_splice(array1,start,length,array2)

$colors = array("red","green","blue","yellow","black");
// echo "<pre>".print_r(array_splice($colors,2),"true")."</pre>"; //blue to black 

// echo "<pre>".print_r(array_splice($colors,2,1),"true")."</pre>"; //blue 

// echo "<pre>".print_r(array_splice($colors,2,3),"true")."</pre>"; //blue to black

// echo "<pre>".print_r(array_splice($colors,2,-1),"true")."</pre>"; //blue yellow
// echo "<pre>".print_r(array_splice($colors,0,-4),"true")."</pre>"; //red

echo "<hr>";


$males = ["aung","maung","kyaw","zaw","naung"];
$females = ["su","yu","nu"];
// array_splice($male,0,2,$females);
// echo "<pre>".print_r($males,"true")."</pre>";

array_splice($males,0,3,$females);
echo "<pre>".print_r($males,"true")."</pre>";



?>


<!-- 24AC  -->


