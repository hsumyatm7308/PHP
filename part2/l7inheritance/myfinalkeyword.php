<?php

class myfinakkeyword
{
    protected $fullname = "HMM";
    public $city = "Mandalay";
    public $email = "nandar@gmail.com";
    public $password = "1234456";

    public function getaccess()
    {
        echo "This is site login : email is $this->email $ password is $this->password";
    }

    final public function getinfo()
    {
        echo "This is site login : city is $this->city
         $ name is $this->fullname";

    }
}



class devloperlogin extends myfinakkeyword
{
    public function githublogin()
    {
        echo "This is github login : email is $this->email. Profile name is $this->fullname";
    }

    // can't overwirte cuz of final keyword
    public function getinfo()
    {
        echo "This is site login : city is $this->city
         $ name is $this->fullname";
    }
}


echo "This is final keyword <br>";

$obj1 = new myfinakkeyword();
$obj1->getaccess();

$obj2 = new devloperlogin();
$obj2->githublogin();
?>