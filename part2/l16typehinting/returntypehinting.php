<?php 


declare(strict_types=1);
// Not:: must return 

class myhint8{
    public function getdata($val){
        return $val;
    }
}


echo "this is return type hinting";

$obj8 = new myhint8();
echo $obj8->getdata('aung'); //aung 
echo $obj8->getdata('10'); //10 
echo $obj8->getdata(100); //100 
echo $obj8->getdata(25.68); //25.68 
echo $obj8->getdata(true); //1 
echo $obj8->getdata(['red','green']); //Array 

echo "<hr>";



class myhint9{
    public function getdata(string $val):string{
        return $val;
    }
}


$obj9 = new myhint9();
echo $obj9->getdata('aung'); //aung 
echo $obj9->getdata('10'); //10 10 10


echo "<hr>";


class myhint10
{

    public function getdata(int $val):int{
        echo $val . "<br>";
        return $val ;
    }

}


echo "THis is retrun type hinting <br>";

$obj10 = new myhint10();

echo $obj10->getdata(100); //100 100

echo "<hr>";



class myhint11
{

    public function getdata(int $x,string $y):int{
        return $x+ $y;
    }

}


echo "THis is return type hinting <br>";

$obj11= new myhint11();

echo $obj11->getdata(100,"200"); //x+y = 300  / x.y = error cuz oupt is string. 

echo "<hr>";



class myhint12
{

    public function getdata(bool $val):bool{
        return $val;
    }

}


echo "THis is return type hinting <br>";

$obj12 = new myhint12();

echo $obj12->getdata(true); 

echo "<hr>";



class myhint13
{

    public function getdata(float $val):float{
        return $val;
    }

}


echo "THis is Argument type hinting <br>";

$obj13 = new myhint13();

echo $obj13->getdata(100); //100 
echo $obj13->getdata(25.6); //25.6 

echo "<hr>";

?>