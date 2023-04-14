
<?php

// (i)MYSQLi Procedural
// (ii)MYSQLi Object-Oriented 
// (iii)Using PDO 
// PDO = php data object 

ini_set('display_errors',1);



// (i)MYSQLi Procedural 
                      //hostname username password database
$conn = mysqli_connect("localhost","root","","wdf008");

if(mysqli_connect_error()){
    echo "Failed to connect :". mysqli_connect_error();
    exit();
}

echo "Connect Successfully";

echo "<hr/>";

$dbhost = "localhost"; 
$dbuser = "root";
$dbpass = "";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass);

if(!$conn){
    // echo "Failed to connect :". mysqli_connect_error();
    // exit();

    die("Failed to connect". mysqli_connect_error());
}

echo "Connect Successfully";

echo "<hr/>";




// (ii)MYSQLi Object-Oriented 
$dbhost = "localhost"; 
$dbuser = "root";
$dbpass = "";
$conn = new mysqli($dbhost,$dbuser,$dbpass);

if(!$conn){
    // echo "Failed to connect :". mysqli_connect_error();
    // exit();

    die("Failed to connect". mysqli_connect_error());
}

echo "Connect Successfully";

echo "<hr/>";




if($conn -> connect_errno){
    echo "Failed to connect : " . $conn -> connect_errno;
    exit();
}

echo "Connect Successfully";


$conn = new mysqli($dbhost,$dbuser,$dbpass);

$conn -> query("SELECT * FROM buyers");
echo $conn -> affected_rows;

$conn -> close(); 



echo "<hr/>";




function openconn(){
$dbhost = "localhost"; 
$dbuser = "root";
$dbpass = "";
$dbconnect = new mysqli($dbhost,$dbuser,$dbpass);

return $dbconnect;
}

function closeconn ($conn){
    $conn -> close();
}


$conn = openconn();
echo "Connect Successfully";
closeconn($conn);

echo "<hr/>";


// (iii)Using PDO 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wdf008";

try{
    $conn = new PDO("mysql:host=$dbhost",$dbuser,$dbpass);
//   $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
$conn -> setAttribute(PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "Connect Successfully";
}catch(PDOException $e){
    echo "Connection Failed : ". $e -> getMessage();

}
?>

<!-- 7DB  -->