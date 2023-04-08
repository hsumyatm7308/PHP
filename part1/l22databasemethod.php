
<?php

// (i)MYSQLi Procedural
// (ii)MYSQLi Object-Oriented 
// (iii)Using PDO 
// PDO = php data object 



// (i)MYSQLi Procedural 
                      //hostname username password database
$conn = mysqli_connect("localhost","root","","wdf008")

if(mysqli_connect_error()){
    echo "Failed to connect :". mysqli_connect_error();
    exit();
}

echo "Connect Successfully";

?>

<!-- 7DB  -->