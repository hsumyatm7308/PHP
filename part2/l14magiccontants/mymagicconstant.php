<?php 

class mymagicconstant{

    public function getclassname1(){
        echo __CLASS__ . "<br>";
    }

    public function getclassname2(){
        echo get_class($this) . "<br>";
    }

    public static function getfunname2(){
        echo __FUNCTION__ . "<br>";
    }

    public function getmthname1(){
        echo __METHOD__ . "<br>";
    }

    public static function getmthname2(){
        echo __METHOD__ . "<br>";
    }


    public function getdir(){
        echo __DIR__ . "<br>";
    }

    public function getfile(){
        echo __FILE__ . "<br>";
    }

    public function getline(){
        echo __LINE__ . "<br>";
    }

}


trait access{
    public $email = "honey@gmail.com";
    public $password = "12345";


    public function gettrait(){
        echo __TRAIT__ . "<br>"; // __TRAIT__ must be in parent traid 
    }
}

class auth{
    use access; 

    public function login(){
        echo "This is user login . email is $this->email & Password is $this->password <br>";
    }
}




echo "This is magicconstant";

$obj = new mymagicconstant();
$obj->getclassname1(); // mymagicconstant
$obj->getclassname2(); //mymagicconstant

$obj::getfunname2(); //getfunname2
$obj->getmthname1(); //mymagicconstant::getmthname1
$obj->getmthname2() ;//mymagicconstant::getmthname2

$obj->getdir();  // C:\xampp\htdocs\phpb3\part2\l14magiccontants  (working directory - folder path)
$obj->getfile() ;   // C:\xampp\htdocs\phpb3\part2\l14magiccontants\mymagicconstant.php (working directory - file path) 

$obj->getline() ;  //35


$obj2 = new auth();
$obj2->login();
$obj2->gettrait(); //access

?>