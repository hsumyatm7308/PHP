<?php

trait sitelogin {
    public $fullname = "Honey Nway Oo";
    public $email = "honey@gmail.com";
    public $password = "123456";

    public function useraccess(){
        echo "Name is  $this->fullname & Email is $this->email & Password is $this->password";
    }

    public function userinfo(){
        echo "Profile name is $this->fullname. <br>";
    }
}

trait devlogin {
    public function githublogin(){
        echo "Name is  $this->fullname & Email is $this->email & Password is $this->password";
    }
}

class googleauth {
    use sitelogin, devlogin;

    public function gmaillogin(){
        echo "Name is  $this->fullname & Email is $this->email & Password is $this->password";
    }
}



class mytrait
{

    // Method 1 
    // use sitelogin;
    // use devlogin;

    // Method 2 
    use sitelogin,devlogin;

    // Method 4 
    // use maintrait;


}

// Create an instance of googleauth and use its methods
echo "This is Trait";
$obj = new googleauth();
echo $obj->fullname; // Honey Nway Oo
echo $obj->email;    // honey@gmail.com
echo $obj->password; // 123456

$obj->useraccess();
$obj->userinfo();
$obj->githublogin();
$obj->gmaillogin();

?>
