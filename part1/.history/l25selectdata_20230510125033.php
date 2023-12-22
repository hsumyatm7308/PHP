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


//Select Data 

$sql = "SELECT id,firstname,lastname FROM students WHERE id = 1";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
        echo "id :". $row['id']. " - Name : ".$row['firstname'] . " ";
    }

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

if($conn -> connect_error){
    die ("Connection Failed :" . $conn->connect_error);

}

// $sql ="SELECT id , firstname,lastname FROM students"; 
// $sql ="SELECT id , firstname,lastname FROM students ORDER BY lastname"; 
$sql ="SELECT id , firstname,lastname FROM students WHERE lastname = 'hlaing' "; 



$result = $conn->query($sql);

echo "$result->num_rows";

if($result -> num_rows > 0 ){
    while($row = $result->fetch_assoc()){
        echo "id : ".$row['id']. " - Name : ". $row["firstname"]. " ".$row['lastname'];
    };
}else{
    echo "No Result";
}

$conn -> close();
echo "<hr>";


$dbhost = "localhost";
$dbuser ="root";
$dbpass = "";
$dbname = "phpdbtwo";

try{

    $conn = new PDO("mysql:host = $dbhost; dbname= $dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT id,firstname,lastname FROM students");
    $stmt->execute();

    // while($row = $stmt->fetch()){
    //     echo "id : ".$row['id']. "- Name : ".$row['firstname']. " ".$row['lastname'];
    // }

    foreach($stmt->fetchAll() as $row){
        echo "id : ".$row['id']. "- Name : ".$row['firstname']. " ".$row['lastname'];
    }


}catch(PDOException $e){
echo "Error Found : ".$e->getMessage();

}

$conn =null;
?>