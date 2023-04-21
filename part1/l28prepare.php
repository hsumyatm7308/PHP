<?php

ini_set('display_errors',1);

// the argument of four types ;

// i - integer 
// d - double 
// s - string 
// b - blob 



// =>MYSQLI Procedural 
/ =>MYSQLi Procedural 
$dbhost = "localhost"; 
$dbuser = "root";
$dbpass = "";

$conn = mysqli_connect("localhost","root","","wdf008");

if(mysqli_connect_error()){
    echo "Failed to Connect : " . mysqli_connect_error();
    exit();
}

echo "Connected Successfully";

//UPdate Data 

// $sql ="INSERT INTO students(firstname,lastname,city)
//         VALUE ('aung','kyaw','yangon')";

$stmt = "INSERT INTO students(firstname,lastname,city) VALUE (?,?,?)";
$prepare = mysqli_prepare($conn,$stmt);
mysqli_stmt_bind_param($prepare,'sss',$firstname,$lastname,$city);

$firstname = "maung";
$lastname = "zaw";
$city = "bagan";
mysqli_stmt_execute($prepare);

$firstname = "maung";
$lastname = "zaw";
$city = "bagan";
mysqli_stmt_execute($prepare);

$firstname = "maung";
$lastname = "zaw";
$city = "bagan";
mysqli_stmt_execute($prepare);

$firstname = "maung";
$lastname = "zaw";
$city = "bagan";
mysqli_stmt_execute($prepare);

$firstname = "maung";
$lastname = "zaw";
$city = "bagan";
mysqli_stmt_execute($prepare);


echo "New Records Created Successfully"

mysqli_close($conn); 

echo "<hr>";


// 21PR 


?>