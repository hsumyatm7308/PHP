<?php

class classconstants{

    // Member variavle 
    const NAME = "Mya Hnin Yee Lwin";
    public const CITY = "Yangon";
    protected const EMAIL = "mamamya@gmail.com";
    private const PASSWORD = "12345679";


    // Member Function 
    public function getinfo(){
        echo "Name is ".self::NAME. " & She live in ".self::CITY."<br>";
    }

    public function getaccess(){
        echo "Email is ".self::EMAIL." & Password is ".self::PASSWORD."<br>";
    }

}


class baby1 extends classconstants{


}


class baby2 extends classconstants{
    public function getcontent(){
        echo "Name is ".self::NAME." & She live in".self::CITY."<br>";
    }

    public function getemail(){
        echo "Email is ".self::EMAIL."<br>";
    }

    //   this is useless cause of privae 
    // public function getpassword(){
    //     echo "Password is ".self::PASSWORD."<br>";
    // }


}

echo "This is Class Constants . <br>";
$obj = new classconstants();
echo $obj::NAME; //Mya Hnin Yee Lwin 
echo "<br>";
// echo $obj::EMAIL; //error cuz of protected 
echo "<br>";
echo "<br>";
echo "<br>";
echo classconstants::CITY;



$obj->getinfo(); //public
$obj->getaccess(); //protected  and private 
echo "<hr>";


echo "This is baby1 Class Constants . <br>";
$bb1 = new baby1();
echo $bb1::NAME; //Mya Hnin Yee Lwin 
echo "<br>";
echo baby1::CITY;


// $bb1::EMAIL; error cuz it's was protected 
// $bb1::PASSWORD; error cuz it's was private 

$bb1->getinfo(); //public
$bb1->getaccess(); //protected  and private 
echo "<hr>";



echo "This is baby1 Class Constants . <br>";
$bb2 = new baby2();
echo $bb2::NAME; //Mya Hnin Yee Lwin 
echo "<br>";
echo baby2::CITY;


// $bb2::EMAIL; //error cuz it's was protected 
// $bb2::PASSWORD;// error cuz it's was private 

$bb2->getcontent(); //public
$bb2->getemail(); //protected => child ka nay call loh ya
// $bb2->getpassword(); //error  private => child ka call loh ma ya
echo "<hr>";
?>