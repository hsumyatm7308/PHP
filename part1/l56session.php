<?php


// Note:: sessin store on server (Super Global Variable)

session_start();

if(isset($_SESSION['idxcount'])){
    $_SESSION['idxcount']++;
}else{
    $_SESSION['idxcount'] = 1; 
}

echo $_SESSION['idxcount'];





?>


<?php

// Note:: Cookies store on User's current broswer 

// echo time();
// echo "<br>";

// echo time()+60*60*24*2;  //2day 

// echo "<br>";

// echo time()+ (86400 * 2); //2day 



?>


<!DOCTYPE html>
<html>
<title>Cookies</title>

<head>

</head>

<body>
    <ul>
        <li><a href="./l56session.php">Set Session</a></li>
        <li><a href="./l56destroysession.php" target="_blank">Delete Session</a></li>
       
    </ul>
</body>

</html>

<!-- 23CC  -->