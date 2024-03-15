<!-- Using PDO (PHO Data Object) -->

<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wdf008";

try{

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // echo 'Connect Successfully';

}catch(PDOException $e){

    echo "Error Fuond :".$e->getMessage();

}


?>