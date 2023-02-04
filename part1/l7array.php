<?php

// Arrays 
//  i  Indexed Array (Manual Array)
//  ii Associative Array 
//  iii Multidimensional Array 



// Indexed Array 

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

// (ii) Associative Array 

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

?>

<!-- 3AR  -->