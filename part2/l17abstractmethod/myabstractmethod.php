<?php

// NOTE:: Abstrace can't inclue body 
// NOTE:: Modifier must be pulick in abstract. cuz we need to overwrite.
// A class that extends sub class must exetends all of the abstracts' method 
// Note::  Can contain non-/static properties/ commonmethod & contant variable
// NOte:: When we set abstract method !!! class must be abstract class as well.


abstract class myabstract
{

    public $id = 50;
    public static $notifi = "New Article Created";
    const TITLE = "This is a new article for Sprot";

    // common method 
    public function cratepost()
    {
        echo "I am from create post. Post title is = " . self::TITLE . "<br>";


    }

    public function readpost()
    {
        echo "I am read post. ID is = " . $this->id . "<br>";
    }


    abstract public function updatepost($title, $id);

    public function deletepost($id)
    {
        echo "I am from delete post,id is ${id} . " . "<br>";
    }

}


class articles extends myabstract
{
    public function updatepost($title, $id)
    {
        echo " i am form update post. Id is ${id} . Title is ${title}";
    }
}


abstract class info
{
    abstract protected function name();
    abstract protected function age();
    abstract protected function profession($sex);

    public function getname()
    {
        return $this->name();
    }

    public function getage()
    {
        return $this->age();
    }

    public function getprofessional($sex)
    {
        return $this->profession($sex);
    }
}


class boyclass extends info
{
    public function name()
    {
        return "Ko Tha";
    }

    public function age()
    {
        return 25;
    }

    public function profession($sex)
    {
        switch($sex){
            case "Male":
               $job = "Engineer";
               break;
            case "Female":
                $job = "Doctor";
                break;
            default:
                $job = "Devloper";

        }

        return $job;

    }
}




class girlcalss extends info
{
    public function name()
    {
        return "Ms.July";
    }

    public function age()
    {
        return 30;
    }

    public function profession($sex)
    {
        switch($sex){
            case "Male":
               $job = "Engineer";
               break;
            case "Female":
                $job = "Doctor";
                break;
            default:
                $job = "Devloper";

        }
        return $job;

    }
}







echo "this is abstract method ";

// Error :: we can't instantiate abstract class
// $obj1  = new myabstract;
// $obj1->cratepost();


$obj2 = new articles();
echo $obj2->id;
echo "<br>";
echo $obj2::$notifi;
echo "<br>";

echo $obj2::TITLE;
echo "<br>";

$obj2->cratepost();
$obj2->readpost();
$obj2->updatepost('tile', 2);
$obj2->deletepost(2);

echo "<hr>";


$objboy = new boyclass();
$boyname = $objboy->name();
$boyage = $objboy->age();
$boypro = $objboy->profession('Male');

echo "{$boyname} is${boyage}  years ole & he is  a ${boypro} <br>";





$objgirl = new girlcalss();
// $girlname = $objgirl->name();
// $girlage = $objgirl->age();
// $girlpro = $objgirl->profession('Male');

$girlname = $objgirl->getname();
$girlage = $objgirl->getage();
$girlpro = $objgirl->getprofessional('Female');
echo "{$girlname} is${girlage}  years ole & he is  a ${girlpro} <br>";

echo "<hr>";



?>