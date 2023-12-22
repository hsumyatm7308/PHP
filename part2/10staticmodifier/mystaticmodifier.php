<?php 

class mystaticmodifier{
    //Static Properties 
     public static $count = 0;

    // Non-static Propertiex 
    public $idx = 0;


    // Statoc Method 
    public function getvalue(){
        self::$count++;
         echo self::$count." self";
         echo "<br>";

         $this->idx++;
         echo $this->idx." nonself";
        
    }

    // Non-static Method 

    public function getresult(){
        static::$count++;
        echo static::$count . " static";

        echo "<br>";

        $this->idx++;
        echo $this->idx . " nonstatic";
    }
}


class baby1 extends mystaticmodifier{
    
}


class baby2 extends mystaticmodifier{
    
    public function getmore(){
        static::$count++;
        echo static::$count . " static";

        echo "<br>";

        $this->idx++;
        echo $this->idx . " nonstatic";
    }
}
echo "this is staticmodifier";
echo "<br>";

$obj = new mystaticmodifier();
echo $obj->idx;
echo "<hr>";
echo $obj::$count;
echo "<br>";

$obj->getvalue(); //self = 1 , $this = 1
echo "<br>";
$obj->getvalue(); //self = 2 , $this = 2
echo "<br>";




$obj->getresult(); //static = 3 , $this = 3
echo "<br>";
$obj->getresult(); //static = 4 , $this = 4
echo "<br>";

echo "<hr>";


$bcj = new mystaticmodifier();
$bcj->getvalue(); //self = 5 , $this = 1 
echo "<br>";
$bcj->getvalue(); //self = 6 , $this = 2
echo "<br>";
$bcj->getvalue(); //self = 7 , $this = 3

echo "<br>";


$bcj->getresult(); //static = 8 , $this = 4 => not start from 1 because of same parents
echo "<br>";
$bcj->getresult(); //static = 9 , $this = 5
echo "<br>";

echo "<hr>";



$bb1 = new baby1();
echo "<br>";
$bb1->getvalue(); //self = 10, $this = 1
echo "<br>";
$bb1->getvalue(); //self = 11 , $this = 2
echo "<br>";


echo "<br>";
$bb1->getresult(); //static = 12 , $this = 3
echo "<br>";
$bb1->getresult(); //static = 13 , $this = 4
echo "<br>";

echo "<hr>";

$bb2 = new baby2();
echo "<br>";
$bb2->getmore(); //static = 14 , $this = 1
echo "<br>";
$bb2->getmore(); //static = 15 , $this = 2
echo "<br>";

?>