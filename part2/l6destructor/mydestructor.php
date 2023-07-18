<?php 

class mydestructor{
 
  

    public $num1 = 200;
    public $num2 = 100;
    public $num3 = 300;

    public $message = "This is ";

    // NOTE:: Destructor can't set parameter 
    public function __destruct(){
     echo "I am start working by automatically after all above!";
        
    }

    public function __construct(){

    $result = $this->num1+$this->num2+$this->num3;

    echo "$this->message : $result <br>";
    echo "$this->message : ${result} <br>";
    }

    public function car($brand){
        echo "I boung a new ${brand} car. <br>";
    }

}


echo "This is destructor";
$obj =  new mydestructor();

$obj->car("toyota");

echo "<hr>";



?>