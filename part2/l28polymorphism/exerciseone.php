<?php

//Same Method Name has different implementation of that method 

class language{

    public $name;
    public $citizen; 

    public function __construct($val1,$val2){
        $this->name = $val1;
        $this->citizen = $val2;
    }

    public function speak(){
        echo "Say Something,.. <br>";
    }
  
}

class bmumese extends language{
    public function speak(){
        echo "Hello Mingalarpar... <br>";
    }
}

class thai extends language{
    public function speak(){
      echo "Hello Sawadikap... <br>";  
    }
}

echo "This is Polymorphism Concept <br>";

$obj1 = new bmumese("Honey Nway Oo","Burmese");
echo $obj1->name; //Honey Neway Oo
echo "<br>";
echo $obj1->citizen; //burmese
echo "<br>";
echo $obj1->speak(); //Hello Mingalarpar
echo "<hr>";


$obj2 = new thai("Tin Tin Aung","Thai");
echo $obj2->name; //in Thin Aung 
echo "<br>";
echo $obj2->citizen; //Thai
echo "<br>";
echo $obj2->speak(); //Hello Sawadikap 
echo "<hr>";


?>