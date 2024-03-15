<?php 

class myconstructor{

    // function  __construct(){
    //     echo "I am start working by automatically !! hee hee :P";
    // }

    // function  __construct($name){
    //     echo "I am ${name} .I am start working by automatically !! hee hee :P";
    // }


    public $num1 = 200;
    public $num2 = 100;
    public $num3 = 300;

    public $message = "This is ";

    public function __construct()
{
    $result = $this->num1+$this->num2+$this->num3;

    echo "$this->message : $result <br>";
    echo "$this->message : ${result} <br>";
}
}

echo "This is constructor";
// $obj = new myconstructor();

// $obj = new myconstructor("Robot");

$obj = new myconstructor();



?>