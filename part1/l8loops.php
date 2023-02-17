<?php

// PHP loops 
// (i) for 
// (ii) foreach 
// (iii) while 
// (iv) do..while 


$colorsones = ["red","green","blue","white","black","grey","pink"];  //indexed array

var_dump($colorsones);
echo "<br/>";

echo count($colorsones);
echo "<br/>";

$coloroneskey = array_keys($colorsones);

echo "<br/>";
echo $coloroneskey;

echo "<br/>";
var_dump($coloroneskey);
echo "<br/>";

// for loop 
// for(statement1;statement2;statement3){
//     code to executed;
// };

for($i =0; $i < count($colorsones); $i++){
    // echo "$colorsones[$i]";
    echo "<br/>";

    // echo "This is indexed array or manual array by forloop = index key is =". $i. "and value is =". $colorsones[$i];

    echo "This is indexed array or manual array by forloop = index key is =". $coloroneskey[$i]. "and value is =". $colorsones[$i];

};

echo "<hr>";

$posts = [
    "postone" => "this is news post one",
    "posttwo" => "this is news post two",
    "postthree" => "this is news post three",
    "postrour" => "this is news post four",
]; //associative array 

$postskey = array_keys($posts);
// var_dump ($postskey);

for($x = 0; $x < count($posts); $x++ ){
    // echo "$x";
    // echo "<br>";

    echo "This is associative array by forloop = index key is =". $postskey[$x] . "and value is =". $posts[$postskey[$x]];

};

echo "<br/>";


$employees = [
    ["name" => "Aung Aung", "gender"=> "Male"],
    ["name" => "Su Su", "gender"=> "Female"],
    ["name" => "Nu Nu", "gender"=> "Female"],
    ["name" => "Kyaw Kyaw", "gender"=> "Male"],
    ["name" => "Tun Tun", "gender"=> "Male"],

];  //Multidimensional Array

echo "<br/>";


$employeeskey = array_keys($employees);
var_dump($employees);

echo "<br/>";

// remove cover first array (multi array)
for($k =0; $k < count($employees); $k++){


    $newkey = array_keys($employees[$employeeskey[$k]]);
    var_dump($newkey);

    echo "<br/>";

    // remove cover second array (asso array)
    for($j = 0; $j < count($newkey) ; $j++){
        var_dump($employees[$k][$newkey[$j]]);
        echo "<br/>";

        echo "this is by multidimensional array by loop  key is". $newkey[$j] . "and value is". $employees[$k][$newkey[$j]];
    };
};


// 17BT 
?>