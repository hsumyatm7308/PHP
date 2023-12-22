<?php

class mymagic
{
    public $num;
    private $name;
    protected $age;

    public function __construct($val)
    {
        // property_exists(classname string,propertyname string)
        // if (property_exists('mymagic', 'num')) {
        //     echo $this->num = $val;

        // } else {
        //     echo "Property doesn[t exists ";
        // }


        // if (property_exists($this, 'num')) {
        //     echo $this->num = $val;

        // } else {
        //     echo "Property doesn[t exists ";
        // }


        if (property_exists($this, 'name')) {
            echo $this->name = $val;

        } else {
            echo "Property doesn[t exists ";
        }

    }
}

class mymagicone
{
    public function __get($var)
    {
        echo "you not yet defined these \" ${var}\"properties. <br>";
    }


    public function __set($var, $val)
    {
        echo "you not yet defined these \" ${var}\"properties. so your value = \"{$val}\" <br>";
    }


}
;

class mymagictwo
{
    public function __call($method, $vals)
    {
        echo "You not yet definded these = \"${$method}\" none-static method. so your value = " . "<pre>" . print_r($vals, true) . "<br>";
    }

    public static function __callStatic($method, $vals)
    {
        echo "You not yet definded these = \"${$method}\" static method. so your value = " . "<pre>" . print_r($vals, true) . "<br>";

    }


}

class mymagithree
{
    public function __invoke()
    {
        echo "Hello Sir , i am working cuz you trying to print-out your class object as method . <br>";
    }
}

class mymagicfour
{
    // public function __toString(){
    //     echo "Hello Sir , i am working cuz you trying to print-out your class object . <br>";
    // }
}
class mymagicfive
{

    public $data;


    public function __construct()
    {
        $this->data = [1, 2, 3, 4];
    }

    public function __sleep()
    {
        "i know when you use serialize";
    }
}


class mymagicsix
{

    public $data;


    public function __construct()
    {
        $this->data = [1, 2, 3, 4];
    }

    public function __wakeup()
    {
        "i know when you use unserialize";
    }
}






echo "This is Encryption <br>";
$obj = new mymagic(100);

echo "<hr>";

$obj1 = new mymagicone();
$obj1->greeting;
$obj1->bye = "Thank You";


echo "<hr>";

$obj2 = new mymagictwo();
$obj2->greeting();
$obj2->greeting("Moringin");
$obj2->greeting("Moringin", "Afternoon", "Evening");

$obj2->bye("bye", "good bye");
echo "<hr>";

$obj3 = new mymagithree();
$obj3();

// $obj4 = new mymagicfour();
// echo $obj4;

$obj5 = new mymagicfive();
serialize($obj5);

echo "<hr>";

$obj6 = new mymagicfive();
serialize($obj6);
unserialize($obj6);
echo "<hr>";

?>