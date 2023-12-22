<?php

ini_set("display_errors", 1);

require_once "./dbconnect.php";
require_once "./sessionconfig.php";


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $getemail = textfilter($_POST['email']);
    $getpassword = textfilter(md5($_POST['password']));

    // echo $getemail;
    // echo $getpassword;

    if ($getemail && $getpassword) {

        loginverify($getemail, $getpassword);
    } else {
        echo "Enter Username $ password";
    }



}


function textfilter($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;
}

function loginverify($email, $password)
{
    try {
        //ho back ka nay lann call tar 
        $conn = $GLOBALS['conn'];

        // $stmt = $conn->prepare('SELECT email,password FROM users WHERE email = "$email" AND password="$password" ');
        // $stmt->execute();


        // essential to protect from SQL injection !! 
        $stmt = $conn->prepare('SELECT email,password FROM users WHERE email =:email AND password=:password ');
        $stmt->bindParam(":email",$bindemail);
        $stmt->bindParam(":password",$bindpassword);
        $stmt->execute();

        $bindemail = $email;
        $bindpassword = $password;



        // formatprint($stmt->fetch()); //1 result from first row
          formatprint($stmt->fetch(PDO::FETCH_ASSOC));
        // formatprint($stmt->fetchAll()); //all results
        // formatprint($stmt->fetchAll(PDO::FETCH_ASSOC)); //all results


        echo $stmt->rowCount()."<br>";

        if($stmt->rowCount() === 0){
            // echo "No Data";
            redirectto('./signin.php');
        }else{
            echo "Yes Data"; 

            // $_SESSION['email'] = $bindemail;
            // $_SESSION['password'] = $bindpassword;
            // header("Location:./plancohomedecoration/index.php");

            setsession('email',$bindemail);
            setsession('password',$bindpassword);
            redirectto("./plancohomedecoration/index.php");

        }



    } catch (PDOException $e) {
        echo "Error found = " . $e->getMessage();
    }
}


function formatprint($array)
{
    echo "<pre>" . print_r($array, true) . "</pre>";
}

?>