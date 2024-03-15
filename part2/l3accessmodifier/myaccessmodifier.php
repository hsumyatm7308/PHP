<?php 

// echo "hay";

// Define Class Object 

// class classname{
//     properties 
//     methods 
// }

// new classname();


class myaccessmodifier{
    //Properties 

    // Access Modifier 
    // (i) public = anywhere can access 
    // (ii) private = only access inside main class 
    // (iii) protected = subclass / extented class 


    var $personname = "JV";
    public $companyname = "Data Land Technology";
    // private $companyname = "Data Land Technology"; //error can't print out
    // protected $companyname = "Data Land Technology"; //error can't print out
 
    public function getnum(){
         $num = 10; 
         echo $num; 
        //  echo $companyname; //can't print 
        //  echo $personname ; //can't print 
    }

}

$obj = new myaccessmodifier();
echo "This is Access Modifier <br>";

$obj->companyname; //Data Land Technology 
$obj->getnum();

echo $obj->personname ; //Mr.Tin


echo $obj->personname = "Mr.Tin"; //Mr.Tin
echo $obj->companyname = "ABC Co.,Ltd" ; //Mr.Tin


echo "<hr>";
?>