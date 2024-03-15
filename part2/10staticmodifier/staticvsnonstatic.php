<?php 

class staticvsnonestatic{

    //    Non-static properties  (member properties)
    public $fullname = "Honey Nway Oo";



    // Static properties
    public static $city = "Mandalay";



    const GENDER = "Female";




    // Non - Static Method (member function)
    // Non-static can call static property & non static property 
    // Non-static method can call static method & non-static method 
    public function getname(){
        echo "I am Non-Static method <br>";
        echo "Name is $this->fullname <br>";
    }

    public function getcity(){
        echo "I am Non-Static method. <br>";
        echo "City is ".self::$city." & Hometown is ".static::$city;
    }

    public function getgender(){
        echo "I am Non-Static method. <br>";
        echo "City is ".self::GENDER;
    }

    public function car(){
        echo "I am Non-Static method. <br>";
        $brand = static::carbrand();
        echo "I bought a new $brand car. <br>";
    }

    public static function mobilebrand(){
        return "Iphone 14 pro";
    }

    public function beforebrand(){
        $mobilebrand = $this->mobilebrand();
        echo "I am thinking to buy $mobilebrand";
    }

    // Static Method 
    // Static Method can't use  non-static property . it only can us static propery (self & static) and constant property
    // Static Method can't use  non-static Method 
    // public static function getstaticname(){
    //     echo "I am Static method <br>";
    //     echo "Name is $this->fullname <br>";
    // }

     public static function getstaticcity(){
        echo "I am Static method <br>";
        echo "City is ".self::$city ." <br>". "Hometown is ".static::$city;
    }


    public static function getstaticgender(){
        echo "I am Static method <br>";
        echo "Gender is ".self::GENDER ." <br>";
    }


    public static function carbrand(){
        return "Toyata LEXUS LX570";
    }


    // can't set static cuz Static method can't use Non- static method
    // public static function mobile(){
    //     echo "I am Static method <br>";
    //  $brand = $this->mobilebrand();
    //  echo "I brought $brand phone";
    // }

    public function afterbuy(){
        $carbr = $this->carbrand();
        echo "I am already bought $carbr";
    }

}



echo "this is static vs non staticmodifier";
echo "<br>";

$obj = new staticvsnonestatic();
echo $obj->fullname;
echo "<br>";
echo $obj::$city;
echo "<br>";
echo $obj::GENDER;
echo "<hr>";

echo $obj->getname();
echo "<br>";
echo $obj->getcity();
echo "<br>";
echo $obj->getname();

echo "<hr>";



//Calling Static Method

// echo $obj->getstaticname(); //can't because static method use non-static propery
echo "<br>";
echo $obj->getstaticcity();
echo "<br>";
echo $obj->getstaticgender();

staticvsnonestatic::getstaticcity();
staticvsnonestatic::getstaticgender();


echo $obj-> car();
echo "<br>";
// echo $obj::mobile(); //error coz Static method can't call none static method 
echo $obj->beforebrand();
echo "<br>";

echo $obj->afterbuy();


?>