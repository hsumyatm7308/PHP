<?php

// Super Global Varables  or 
// Pre Define Variable 

//   1.$GLOBALS
//   2.$_SERVER
//   3.$_REQUEST 
//   4.$_POST 
//   5.$GET 
//   6.$_FILSES
//   7.$_ENV 
//   8.$_COOKIE 
//   9.$_SESSION 

$num1 = 10;
$num2 = 20;

function totalresult(){
    $GLOBALS['result'] = $GLOBALS['num1'] + $GLOBALS['num2'];
}

totalresult(); //must invoke at least 1 times 
echo $result;

echo "<hr>";

 //2. $_SERVER 
 echo $_SERVER["PHP_SELF"]; ///phpb3/part1/l12supergloblevariable.php   (Current path)
 echo "<hr>";


 echo $_SERVER["HTTP_USER_AGENT"];  //Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36
 echo "<hr>";

 echo $_SERVER["HTTP_HOST"];  //localhost   domain name ko swal yuu htar  (request )
 echo "<hr>";

 echo $_SERVER["SERVER_NAME"];  //localhos t(Return the name of host server - www.domainname.com)
 echo "<hr>";

 echo $_SERVER["SERVER_SOFTWARE"];  //Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.2.0     Api ko indrouction lote tae a khar tone
 echo "<hr>";

 
 echo $_SERVER["SERVER_PORT"];  //80
 echo "<hr>";


 echo $_SERVER["SERVER_PROTOCOL"];  //HTTP/1.1
 echo "<hr>";

 echo $_SERVER["SERVER_SIGNATURE"];  //Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.2.0 Server at localhost Port 80
 echo "<hr>";


 echo $_SERVER["REQUEST_METHOD"];  //GET
 echo "<hr>";

 echo $_SERVER["REMOTE_ADDR"];  //::1  (port number ko so lo tar)  returns the ip address form whrer the user is viewing
 echo "<hr>";

 echo $_SERVER["SCRIPT_FILENAME"];  //C:/xampp1/htdocs/phpb3/part1/l12supergloblevariable.php (absolute path)
 echo "<hr>";

 echo $_SERVER["SCRIPT_NAME"];  ///phpb3/part1/l12supergloblevariable.php  (PHP_SALF )
 echo "<hr>";

?>
