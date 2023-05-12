<?php
ini_set('display_errors',1);

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

//UPdate Data 

$sql ="UPDATE students SET lastname='thun thun' WHERE id = 1";
$result = mysqli_query($conn,$sql);

if(mysqli_query($conn,$sql)){

   echo "Update Successfully";

}else{
    echo "No Result";
}

mysqli_close($conn); 

echo "<hr>";



//Mysql Oriented 

$dbhost = "localhost";
$dbuser ="root";
$dbpass = "";
$dbname = "phpdbtwo";

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if($conn -> connect_err){
    die ("Connection Failed :" . $conn->connect_error);

}

// $sql ="SELECT id , firstname,lastname FROM students"; 
// $sql ="SELECT id , firstname,lastname FROM students ORDER BY lastname"; 
$sql ="UPDATE students SET lastname='mar aye' WHERE id = 44";



$result = $conn->query($sql);

echo "$result->num_rows";

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
    
    $sql = "UPDATE students SET city='mawlamyine' WHERE id = 31";
    $stmt = $conn->prepare($sql);
    $stmt ->execute();

    echo $stmt->rowCount() . " Updated Successful";

}catch(PDOException $e){
echo "Error Found : ".$e->getMessage();

}

$conn =null;


?>