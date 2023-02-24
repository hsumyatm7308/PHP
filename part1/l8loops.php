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


// foreach loop 

// foreach(mainarray as value){
//     code to be executed 
// }

// foreach(mainarray as key => value){
//     code to be excuted

// }

// while loop 
// start 

// while(condition is true){
//     code to be executed;
//     inn or dec 
// }



for($i =0; $i < count($colorsones); $i++){
    // echo "$colorsones[$i]";
    echo "<br/>";

    // echo "This is indexed array or manual array by forloop = index key is =". $i. "and value is =". $colorsones[$i];

    echo "This is indexed array or manual array by forloop = index key is =". $coloroneskey[$i]. "and value is =". $colorsones[$i];

};

echo "<hr>";


// foreach($colorsones as $colorsone){
//     echo "this is indexed array or manual array by foreach =" . $colorsone . "<br>";
// }; 

foreach($colorsones as $key => $colorone){
    echo "This is indexed array or manual array by forloop = index key is =". $key. "and value is =". $colorone . "<br>";

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

echo "<hr/>";


foreach($posts as $key=>$post){
    echo $key;
    echo "This is associative array by foreach = key is " . $key . " and value is " . $post . "<br>";
};


echo "<hr/>";


$k = 0;

while($k < count($posts)){
    echo "This is associative array by while = key is ". $postskey[$k] . " and value is " . $posts[$postskey[$k]] . "<br>"; 

    $k++;
};


echo "<hr/>";



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


echo "<hr/>";



foreach($employees as $key => $employee){
    // echo $employee;

    foreach($employee as $key => $value){
        // echo $value;

        echo "This is multidimensional array by foreach = key is ". $key . " and value is " . $value. "<br>";

    };
};

echo "<hr/>";

$x = 0;

while($x < count($colorsones)){
    // echo $colorsones[$x]. "<br>";
    // echo "This is multidimensional array by foreach = key is ". $x . " and value is " . $colorsones[$x]. "<br>";
    echo "This is multidimensional array by foreach = key is ". $coloroneskey[$x] . " and value is " . $colorsones[$x]. "<br>";



    $x++;
}

echo "<hr/>";

$x = 0;
$indexkey = array_keys($employees);
// echo $indexkey;
while($x < count($employees)){

    echo $indexkey[$x];

    // echo array_keys($employees[$indexkey[$x]]);

 $newkey = array_keys($employees[$indexkey[$x]]);


// echo($newkey);

$y = 0;

while($y < count($newkey)){
    echo "This is multidimensional array by while = key is ". $newkey[$y] . " value is " . $employees[$x][$newkey[$y]] . "<br>";

// echo "<hr/>";
   
// echo $newkey[$y];

$y++;
 
};
    $x++;


};
 
?>