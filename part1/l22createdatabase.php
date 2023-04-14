<?php

ini_set("display_errors",1);

// =>MYSQLi Procedural 
$dbhost = "localhost"; 
$dbuser = "root";
$dbpass = "";

$conn = mysqli_connect("localhost","root","","wdf008");

if(mysqli_connect_error()){
    echo "Failed to Connect : " . mysqli_connect_error();
    exit();
}

echo "Connected Successfully";

// Create Database
// $sql = "CREATE DATABASE phpdbone"; 
$sql = "CREATE DATABASE IF NOT EXISTS phpdbone"; 

if(mysqli_query($conn,$sql)){
    echo "Database Created Successfully";
}else{
    echo "Error Found : ". mysqli_error($conn);
}

mysqli_close($conn);

echo "<hr>";




// =>MYSQLi Object_Oriented 
$dbhost = "localhost"; 
$dbuser = "root";
$dbpass = "";
$dbconnect = new mysqli($dbhost,$dbuser,$dbpass);

if($dbconnect -> connect_errno){
    // echo "Connection Failed : " . $dbconnect -> connect_errno;
    // exit();

    // die("Connect Failed :" . $dbconnect -> connect_errno);
    die("Connect Failed :" . $dbconnect -> connect_error);
}

echo "connected Successfully "."<br>";


// Create Database 
$sql = "CREATE DATABASE IF NOT EXISTS phpdbtwo";

if($dbconnect->query($sql) === TRUE){
    echo "Database Created Successfully";
}else{
    echo "Error Found : ". $dbconnect->error;
}

$dbconnect->close();

echo "<hr>";


$dbhost = "localhost"; 
$dbuser = "root";
$dbpass = "";


try{
    $conn = new PDO("mysql:host=$dbhost",$dbuser,$dbpass);
    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS phpdbthree";
    $conn->exec($sql);

    echo "Database Created Successfully";
}catch(PDOException $e){
    echo "Error Found : ".$e->getMessage();
}

// 14PD 

?>
