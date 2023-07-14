<?php 

// echo "hay";

// Define Class Object 

// class classname{
//     properties 
//     methods 
// }

// new classname();


class mymethods{
    //Properties 

    // Access Modifier 
    // (i) public = anywhere can access 
    // (ii) private = only access inside main class 
    // (iii) protected = subclass / extented class 


    // Class Method 
    public function greeting(){
        echo "Have a good day. <br>";
    }

    public function calculate($num){
        echo "Getting calculate number is = ${num} <br>";
    }

    public function result($num=1){
        echo "getting returlt number is = ${num} <br>";
    }
}


$obj = new mymethods();
echo "This is Class Object <br>";

$obj->greeting();

$obj->calculate(100);
$obj->result(200);
$obj->result(); //getting returlt number is = 1

echo "<hr>";
?>