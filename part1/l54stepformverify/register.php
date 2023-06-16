<?php

ini_set('display_errors', 1);

require_once('./dbconnect.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $getfirstname = textfilter($_POST['firstname']);
    $getlastname = textfilter($_POST['lastname']);
    $getemail = textfilter($_POST['email']);
    $getpassword = md5(textfilter($_POST['password']));
    $getdob = textfilter($_POST['dob']);
    $getphone = textfilter($_POST['phone']);
    $getaddress = textfilter($_POST['address']);

    // echo $getfirstname;
    // echo $getlastname;
    // echo $getemail;
    // echo $getpassword;
    // echo $getdob;
    // echo $getphone;
    // echo $getaddress;


     if($getemail &&$getpassword){
        try{
            $stmt = $conn->prepare("INSERT INTO users(profile,firstname,lastname,email,password,dob,phone,address) VALUE (:profile:firstname,:lastname,:password,:dob,:phone,:address)"); 
            $stmt->bindParam(":firstname",$firstname);
            $stmt->bindParam(":lastname",$lastname);
            $stmt->bindParam(":email",$email);
            $stmt->bindParam(":password",$password);
            $stmt->bindParam(":dob",$dob);
            $stmt->bindParam(":phone",$phone);
            $stmt->bindParam(":address",$address);


            $firstname = $getfirstname;
            $lastname = $getlastname;
            $email = $getemail;
            $password = $getpassword;
            $dob = $getdob;
            $phone = $getphone;
            $address = $getaddress; 

            $stmt->execute();

            echo "New Records Created Successfully";


        }catch(PDOException $e){
            echo "Error Found : ".$e->getMessage();
        }


$conn = null;

     }
}

function textfilter($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data; // Add the return statement here
}


?>


<!-- CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    profile VARCHAR(255),
    firstname VARCHAR(20),
    email VARCHAR(20),
    email VARCHAR(30) UNIQUE,
    password VARCHAR(255),
    dob DATE,
    phone VARCHAR(13),
    address VARCHAR(100)
)


DESC users;
SHOW INDEXS FROM users; -->


<!-- 16PG  -->