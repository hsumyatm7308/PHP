<?php

ini_set('display_errors',1);

// the argument of four types ;

// i - integer 
// d - double 
// s - string 
// b - blob 



// =>MYSQLI Procedural 
// / =>MYSQLi Procedural 
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



$dbhost = "localhost";
$dbuser ="root";
$dbpass = "";
$dbname = "phpdbtwo";

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if($conn -> connect_err){
    die ("Connection Failed :" . $conn->connect_error);

}

$stmt = $conn->prepare("INSERT INTO students(firstname,lastname,city) VALUE (?,?,?)");
$stmt->bind_param("sss",$firstname,$lastname,$city);

$firstname = "kyaw kyaw";
$lastname = "aung";
$city = "bago";
$stmt->execute();

$firstname = "aye kyaw";
$lastname = "thu";
$city = "bago";
$stmt->execute();

$firstname = "kyaw tun";
$lastname = "aung";
$city = "bago";
$stmt->execute();

if($conn->query($sql)===TRUE ){

   echo "Update Successfully";

}else{
    echo "No Result";
}

$conn -> close();
echo "<hr>";




//PDO  

$dbhost = "localhost";
$dbuser ="root";
$dbpass = "";
$dbname = "phpdbtwo";

try{

    $conn = new PDO("mysql:host = $dbhost; dbname= $dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO:ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    

    $stmt = $conn->prepare("INSERT INTO students(firstname,lastname,city) VALUE(:firstname,:lastname,:city)");
    $stmt->bind_param(':firstname',$firstname);
    $stmt->bind_param(':lastname',$lastname);
    $stmt->bind_param(':city',$city);

    $firstname = "kyaw kyaw";
    $lastname = "aung";
    $city = "bago";
    $stmt->execute();
    
    $firstname = "aye kyaw";
    $lastname = "thu";
    $city = "bago";
    $stmt->execute();
    
    $firstname = "kyaw tun";
    $lastname = "aung";
    $city = "bago";
    $stmt->execute();

    echo $stmt->rowCount() . " Updated Successful";

}catch(PDOException $e){
echo "Error Found : ".$e->getMessage();

}

$conn =null;


?>