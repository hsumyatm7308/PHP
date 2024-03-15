<?php


// Note :: Type hinting is concept that provides hints to function for the expeted daa type of arguments ;

// Atvantage of type hinting : 
//    helps users debug the code easily or the code provides error very specifically 
//    a greate concept for static kind of data 

// Disadvantages of type hinting : 
//    functions  only take one type of data 
//    the dynamice data or argument are not there 
declare(strict_types=1);

class myhint1
{

    public function getdata($val)
    {
        echo $val . "<br>";
    }

}


echo "THis is Argument type hinting <br>";

$obj1 = new myhint1();
$obj1->getdata("aung aung");
$obj1->getdata("10");
$obj1->getdata(100);
$obj1->getdata(25.4);
$obj1->getdata(true);
// $obj1->getdata(['maung','aung']);


echo "<hr>";




class myhint2
{

    public function getdata(string $val)
    {
        echo $val . "<br>";
    }

}


echo "THis is Argument type hinting <br>";

$obj2 = new myhint2();
$obj2->getdata("aung aung");
$obj2->getdata("10");
// $obj2->getdata(100); //error
// $obj2->getdata(true); //error
// $obj2->getdata(25.5); //error
// $obj1->getdata(['maung','aung']);


echo "<hr>";



class myhint3
{

    public function getdata(int $val)
    {
        echo $val . "<br>";
    }

}


echo "THis is Argument type hinting <br>";

$obj3 = new myhint3();
// $obj3->getdata("aung aung"); //error
// $obj3->getdata("10"); //error 
$obj3->getdata(100);
// $obj3->getdata(25.5); // 1 = error  && false(0) = 25
// $obj3->getdata(true); //error
// $obj3->getdata(['maung','aung']); //error error


echo "<hr>";





class myhint4
{

    public function getdata(bool $val)
    {
        echo $val . "<br>";
    }

}


echo "THis is Argument type hinting <br>";

$obj4 = new myhint4();
// $obj4->getdata("aung aung"); // 1 error
// $obj4->getdata("10"); // 1 error 
// $obj4->getdata(100); // 1 error 
// $obj4->getdata(25.5); // 1  error 
$obj4->getdata(true);
// $obj4->getdata(['maung','aung']); //error error


echo "<hr>";







class myhint5
{

    public function getdata(float $val)
    {
        echo $val . "<br>";
    }

}


echo "THis is Argument type hinting <br>";

$obj5 = new myhint5();
// $obj5->getdata("aung aung"); //  error
// $obj5->getdata("10"); // 10 error 
$obj5->getdata(100); // 100 100 
$obj5->getdata(25.5); // 25.5  25.5
// $obj5->getdata(true); //1 error
// $obj5->getdata(['maung','aung']); //error error


echo "<hr>";




class myhint6
{

    public function getdata(array $val)
    {
        print_r($val, false) . "<br>";
    }

}


echo "THis is Argument type hinting <br>";

$obj6 = new myhint6();
// $obj6->getdata("aung aung"); ///error error
// $obj6->getdata("10"); //error error
// $obj6->getdata(100); //error error
// $obj6->getdata(25.5); //error error
// $obj6->getdata(true); //error error
$obj6->getdata(['maung', 'aung']);


echo "<hr>";



class myhint7
{

    public function total(array $arrs)
    {
        $result = 0;
        foreach ($arrs as $arr) {

            $result += $arr;
        }


        echo $result;
    }

}


echo "THis is Argument type hinting <br>";

$obj7 = new myhint7();

$obj7->total([10, 20]);


echo "<hr>";



class phone
{


     protected $brand;
     protected $hasfacesensor;
     protected $numberfsim;
     protected $price; 


    public function setbrand(string $values)
    {
        $this->brand = $values;
    }


    public function sethasfacesensor(bool $values){
        $this->hasfacesensor = $values;
    }


    public function setnumberofsim(int $values){
        $this->numberfsim = $values;
    }

    public function  setprice(float $values){
        $this->price = $values;
    }

    public function getinfo(){
        echo "Brand Name = " .$this->brand . "<br> face sensor =".  $this->hasfacesensor ."<br> Number of sim = ".$this->numberfsim; 
    }


}




echo "THis is Argument type hinting <br>";

$objph = new phone();

$objph->setbrand('iphone');
$objph->sethasfacesensor(true);
$objph->setnumberofsim(123);
$objph->setprice(12.5);
$objph->getinfo();


echo "<hr>";



?>