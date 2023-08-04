<?php 

interface encrypt{
    public function setpasscode($plaintext);
    public function passworddef();
    public function passwordbcr();
    public function passwordvry();
}

class myencryption implements encrypt{
    private $passcode;
    public function setpasscode($plaintext){
      echo  $this->passcode = $plaintext;

    }


    // NOTE:: Password_hash()
    //                Keyword  PASSWORD_DEFAULT  
                 //    PASSWORD_BCRYPT
    public function passworddef(){
        $newpassword = password_hash($this->passcode,PASSWORD_DEFAULT);
        echo "This is Before passcode $this->passcode and <br> this is after encrypt $newpassword <br>";
        
    }
    public function passwordbcr(){
        $newpassword = password_hash($this->passcode,PASSWORD_BCRYPT);
        echo "This is Before passcode $this->passcode and <br> this is after encrypt $newpassword <br>";
        
    }
    public function passwordvry(){

    }
}

echo "This is Encryption <br>";
$obj = new myencryption();
$obj->setpasscode(123);
$obj->passworddef();
$obj->passwordbcr();
?>


<!-- 4EN  -->