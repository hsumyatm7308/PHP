<?php 


class course{

    public $courseidx;

    public function __construct($val){

        $this->courseidx = $val;

    }

    public function getcourseidx(){
        echo "Course Index is = ". $this->courseidx;
    }
}


class lesson extends course{
    public $lessonnumber;

    public function __construct($val){

        $this->lessonnumber = $val;

    }

    public function getlessonnumber(){
        echo "Lesson Index is = ". $this->lessonnumber;
    }
}

echo "This is Dependency Injection <br>";

echo "<hr>";

$getcourse = new course(1);
$getcourse->getcourseidx(); //Course Index is = 1
echo "<br>";


$getlsesson = new lesson(10);
$getlsesson->getlessonnumber(); //Lesson Index is = 10

$getlsesson->getcourseidx(); //Course Index is =

// $getcourse->getlessonnumber(); //error 


echo "<hr>";

// =>Parent to Child 

class vehicle{

    public $modelnumber;
    public $evcarprice ;
    public $modeobj;

    public function __construct($val,$price,$mode){

        $this->modelnumber = $val;
        $this->evcarprice = new evcar($price);
        $this->modeobj = new carmode($mode);

    }

    public function getmodelnumber(){
        echo "Vehicle Model Number Index is = ". $this->modelnumber;
    }
}


class evcar extends vehicle{
    public $price;

    public function __construct($val){

        $this->price = $val;

    }

    public function getprice(){
        echo "Ev Car Price Index is = ". $this->price;
    }
}



class carmode extends vehicle{
    public $type;

    public function __construct($val){

        $this->type = $val;

    }

    public function gettype(){
        echo "Ev Car Price Index is = ". $this->type;
    }
}


$getvehicle = new vehicle(1111,20000,"luxary");
$getvehicle->getmodelnumber();

$getevcar = new evcar(1000);
$getevcar->getprice();


$getvehicle->evcarprice->getprice();
$getvehicle->modeobj->gettype();


echo "<hr>";



class phone{

    public $brand;

    public function __construct($val){

        $this->brand = $val;

    }

    public function getphonebrand(){
        // echo "Phone Brand Index is = ". $this->brand;  //passing by properties 
        return "Phone brand is = ".$this->brand. "<br>"; //passing by member method 
    }
}


class phonemodel extends phone{
    public $price;

    public function __construct($val,phone $phone){

        $this->price = $val;
        // $this->brand = $phone->brand; //passing by properties
        $this->brand = $phone->getphonebrand(); //passing by member method 

    }

    public function getprice(){
        echo "Price Index is = ". $this->price;
    }
}


$getphone = new phone("iphone");
$getphone->getphonebrand();

$getphonemodel = new phonemodel(1000,$getphone);
$getphonemodel->getprice();

// $getphonemodel->getphonebrand();
echo "<br>";
// echo $getphonemodel->brand; //iphones
echo "<br>";

// passing by properties 
// $getphonemodel->getphonebrand(); //Phone brand is iphone

// passing by meember method 
echo $getphonemodel->brand;




?>