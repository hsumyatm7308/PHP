<<<<<<< HEAD
<?php

// Arrays 
//  i  Indexed Array (Manual Array)
//  ii Associative Array 
//  iii Multidimensional Array 



// Indexed Array (Manual arry)

$names = array('aung aung',"maung maung","zaw zaw","kyaw kyaw","tun tun");
// echo $names;

echo "<br/>";
echo count($names);
echo "<br/>";
// print $names;
echo "<br/>";
print_r($names,false);

echo "<br/>";


$colors = ["red","green","blue","white","black"];
echo $colors;
echo "<br/>";
echo count($colors);
echo "<br/>";
echo "<pre>".print_r($colors,"true")."</pre>";

var_dump($colors);

$colors[6] = "grey";
$colors[7] = "stone";
$colors[8] = "skyblue";
$colors [0] = "voilet";

echo "<pre>".print_r($colors,"false")."</pre>";

echo "my fav color is".$colors[3];
echo "<hr/>";

// ---------------------------------------------------

// (ii) Associative Array  (Array with named keys)

$news = array("pone" => "this is post one","ptwo"=>"this is post two","pthree"=>"this is post three");
var_dump($news);
echo "<br/>";

$medias = ["pone" => "this is post one",
"ptwo" => "this is post two",
"pthree" => "this is post three"];

var_dump($medias);
echo "<br/>";

$medias["pfour"] = "this is post four";
$medias["pfive"] = "this is post five";

echo "<pre>".print_r($medias,"true")."</pre>";
echo "i like this post, so post name is ".$medias["pthree"];
// -------------------------------------


// (iii) Multidimensional Array -  Arrays containings one or more arrays

// $paints = array(

//     // indexed arrays
//     array('red',"green","blue","white"),
//     array("pen","pencil","ruler"),
//     array("paper","plastic")
// );

// $paints = [

//     // indexed arrays
//     ["red","green","blue","white"],
//     ["pen","pencil","ruler"],
//     ["paper","plastic"]
// ];


// var_dump($paints);
// echo "<br/>";


// $persons = array(
//     array("name" => "Aung Aung","age" => "20"),
//     array ("name" => "Su Su","age"=> "30"),
//     array("name" =>"Yin Yin","age"=> "20")
// );



$persons = [
    ["name" => "Aung Aung","age" => "20"],
    ["name" => "Su Su","age"=> "30"],
    ["name" =>"Yin Yin","age"=> "20"]
];

// var_dump($paints)
// echo "<br/>";

// echo $paints[0] [0];
// echo $paints[1] [0];
// echo $paints[2] [0];
echo "<br/>";

echo $persons[0]["name"];
echo $persons[1]["name"];
echo $persons[1]["name"];
// ------------------------------------


?>

=======
<?php

// Arrays 
//  i  Indexed Array (Manual Array)
//  ii Associative Array 
//  iii Multidimensional Array 



// Indexed Array (Manual arry)

$names = array('aung aung',"maung maung","zaw zaw","kyaw kyaw","tun tun");
// echo $names;

echo "<br/>";
echo count($names);
echo "<br/>";
// print $names;
echo "<br/>";
print_r($names,false);

echo "<br/>";


$colors = ["red","green","blue","white","black"];
echo $colors;
echo "<br/>";
echo count($colors);
echo "<br/>";
echo "<pre>".print_r($colors,"true")."</pre>";

var_dump($colors);

$colors[6] = "grey";
$colors[7] = "stone";
$colors[8] = "skyblue";
$colors [0] = "voilet";

echo "<pre>".print_r($colors,"false")."</pre>";

echo "my fav color is".$colors[3];
echo "<hr/>";

// ---------------------------------------------------

// (ii) Associative Array  (Array with named keys)

$news = array("pone" => "this is post one","ptwo"=>"this is post two","pthree"=>"this is post three");
var_dump($news);
echo "<br/>";

$medias = ["pone" => "this is post one",
"ptwo" => "this is post two",
"pthree" => "this is post three"];

var_dump($medias);
echo "<br/>";

$medias["pfour"] = "this is post four";
$medias["pfive"] = "this is post five";

echo "<pre>".print_r($medias,"true")."</pre>";
echo "i like this post, so post name is ".$medias["pthree"];
// -------------------------------------


// (iii) Multidimensional Array -  Arrays containings one or more arrays

// $paints = array(

//     // indexed arrays
//     array('red',"green","blue","white"),
//     array("pen","pencil","ruler"),
//     array("paper","plastic")
// );

// $paints = [

//     // indexed arrays
//     ["red","green","blue","white"],
//     ["pen","pencil","ruler"],
//     ["paper","plastic"]
// ];


// var_dump($paints);
// echo "<br/>";


// $persons = array(
//     array("name" => "Aung Aung","age" => "20"),
//     array ("name" => "Su Su","age"=> "30"),
//     array("name" =>"Yin Yin","age"=> "20")
// );



$persons = [
    ["name" => "Aung Aung","age" => "20"],
    ["name" => "Su Su","age"=> "30"],
    ["name" =>"Yin Yin","age"=> "20"]
];

// var_dump($paints)
// echo "<br/>";

// echo $paints[0] [0];
// echo $paints[1] [0];
// echo $paints[2] [0];
echo "<br/>";

echo $persons[0]["name"];
echo $persons[1]["name"];
echo $persons[1]["name"];
// ------------------------------------


?>

>>>>>>> ebe34e67d94b369b920b454cf3c5d922ce1a1796
