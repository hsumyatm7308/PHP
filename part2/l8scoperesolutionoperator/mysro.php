<?php


class mysro{

    const GREETING = "Hello Fried. Good evening from Thailand";

    const THANKS = 'Hi Friend. Thanks for visiting out country.';
    // Note:: define can't in sro 
    // define("NAME",'kyaw kyaw');



    public $fullname = "Honey Nway Oo";

    public function sayhi(){
        echo self::GREETING;
    }


    public function saythanks(){
        echo static::THANKS;
    }


    public function __construct(){
        echo "I am start working by automatically from Main Class. hee hee" ."<br>";
    }

    public function asset(){
        echo "I bought a car Toyota". "<br>";
    }
}


class child1 extends mysro{

}

class child2 extends mysro{

    const GREETING = "Hello Friend. Good Morning from overide";
    const THANKS = "Hi Friend . I'm override from child2";

    public function sayhifi(){

        echo self::GREETING; //on here echo self and static are same
    }

    public function saybye(){

        echo self::THANKS; //on here echo self and static are same
    }
}



class child3 extends mysro{

    // Mathod Override - Parent Method Override 
    public function __construct(){
        parent::__construct();
        echo "I am start working by automatically from Sub class "."<br>";
    }

    public function asset(){
        parent::asset();
        echo "I bought a new Mazada Car. <br>";
    }
}

echo "This is Scope Resolution Operator"."<br>";

$obj = new mysro();

echo $obj->fullname . "<br>";
echo $obj::GREETING . "<br>";
echo mysro::GREETING. "<br>";
echo $obj->sayhi();
echo $obj->saythanks();

echo "<hr>";

$ch1 = new child1();
echo $ch1->fullname . "<br/>";
echo $ch1::GREETING . "<br/>";
echo child1::GREETING;
echo child1::THANKS;

echo "<hr>";


$ch2 = new child2();
echo $ch2::GREETING . "<br>";
echo $ch2::THANKS . "<br>";
echo $ch2->sayhi() ."<br>"; //self => Hello Fried. Good evening from Thailand
echo $ch2->saythanks(); //static => Hi Friend . I'm override from child2



echo "<hr>";

$ch3 = new child3();
echo $ch3::GREETING . "<br>"; //Hello Fried. Good evening from Thailand
echo $ch3::THANKS . "<br>"; //Hi Friend. Thanks for visiting out country.
echo $ch3->sayhi() ."<br>"; //Hello Fried. Good evening from Thailand
echo $ch3->saythanks() . "<br>"; //Hi Friend. Thanks for visiting out country.
echo $ch3->asset();


?>


