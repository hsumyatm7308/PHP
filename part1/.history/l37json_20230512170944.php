<?php

// json_encode();
// json_decode();

$color = ["red","green","blue"];
var_dump($color);

$mycolor = json_encode($color);
echo "<br>";
echo($mycolor);
echo "<br>";
var_dump($mycolor);

$students = ["name"=>"aung aung","age"=>"22","city"=>"Yangon"];
echo "<pre>".print_r($students,true)."</pre>";
echo $students['name']."</br>";
echo $students['age']."</br>";
echo $students['city']."</br>";

$studentsen = json_encode($students);
echo $studentsen;


// can't print 
// echo $studentsen["name"];
// echo $studentsen["age"];
// echo $studentsen["city"];


echo "<hr>";

$students = '{"name":"aung aung","age":25,"city":"yangon"}';
$studentsde = json_decode($students);
echo "<pre>".print_r($studentsde,true)."</pre>";



// can't print 
// echo $studentsen["name"];
// echo $studentsen["age"];
// echo $studentsen["city"];

// can print(-> Object Operactor)
echo $studentsde->name . "<br>";
echo $studentsde->age . "<br>";
echo $studentsde->city . "<br>";

?>
