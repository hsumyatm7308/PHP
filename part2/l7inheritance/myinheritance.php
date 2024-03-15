<?php


// Super Class or Main Class 
class myinheritance{

    protected $fullname = "HMM";
    public  $city = "Mandalay";
    public $email = "nandar@gmail.com";
    public $password = "1234456";

    public function getaccess(){
        echo "This is site login : email is $this->email $ password is $this->password";
    }

    public function getinfo(){
        echo "This is site login : city is $this->city
         $ name is $this->fullname";

    }

}



// Sub Class or Child Class 
class devlogin extends myinheritance{
    public function githublogin(){
        echo "This is github login : email is $this->email. Profile name is $this->fullname" ;
    }
}


// Note:: public and protected can access from sub class. but pravite can't.


class sociallogin extends myinheritance {

    public function gmaillogin(){
        echo "This is gmail login : email is $this->email. Profile name is $this->fullname . <br>"; 
    }

    public function facebooklogin(){
        echo "This is gmail login : email is $this->email. Profile name is $this->fullname . <br>"; 
    }


    // Method Override 
    public function getinfo(){
        $this->fullname = "JV";
        $this->city = "Bago";
        
        echo "This is gmail login : name is $this->fullname. city name is $this->city . <br>"; 
    }

}


echo "This is Inheritance". "<br>";

$obj = new myinheritance();
$obj->getaccess();

echo "<hr>";

$dev = new devlogin();
$dev->githublogin();

echo "<hr>";

$soc = new sociallogin();
$soc->gmaillogin();
$soc->facebooklogin();
$soc->getinfo();

?>