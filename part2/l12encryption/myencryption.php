<?php

interface encrypt
{
    public function setpasscode($plaintext);
    public function passworddef();
    public function passwordbcr();
    public function passwordvry();
    public function passwrodrehash();

    public function getciphermethod();
    public function customenctypt();
    public function customdecrypt();
}

class myencryption implements encrypt
{
    private $passcode;
    public function setpasscode($plaintext)
    {
        echo $this->passcode = $plaintext;

    }


    // NOTE:: Password_hash()
    //                Keyword  PASSWORD_DEFAULT  
    //    PASSWORD_BCRYPT
    public function passworddef()
    {
        $newpassword = password_hash($this->passcode, PASSWORD_DEFAULT);
        echo "<br>";

        echo "This is Before passcode $this->passcode and <br> this is after encrypt $newpassword <br>";
        echo "<br>";
        echo strlen($newpassword);
        echo "<br>";

    }
    public function passwordbcr()
    {
        $newpassword = password_hash($this->passcode, PASSWORD_BCRYPT);
        echo "<br>";
        echo "This is Before passcode $this->passcode and <br> this is after encrypt $newpassword <br>";
        echo "<br>";
        echo strlen($newpassword);
        echo "<br>";

    }
    public function passwordvry()
    {

        // password_verify(sting,hash)

        $plaintextone = "password123";
        $enccode = password_hash($plaintextone, PASSWORD_DEFAULT);

        $verify = password_verify($plaintextone, $enccode);


        $plaintexttwo = "password12345";
        $enccodetwo = password_hash($plaintexttwo, PASSWORD_DEFAULT);
        $verify = password_verify($plaintextone, $enccodetwo);


        if ($verify) {
            echo "OKI";
        } else {
            echo "Failded";
        }

    }

    public function passwrodrehash()
    {

        // password_hash(string,mixed,optional)
        // =keywords 
        // PASSWORD_DEFAULT 
        // PASSWORD_BCRYPT

        $plaintext = "password123";
        $encode = password_hash($plaintext, PASSWORD_DEFAULT);
        echo "password hash with " . $encode;

        if (password_needs_rehash($encode, PASSWORD_DEFAULT, ["const" => 12])) {

            $rehashed = password_hash($plaintext, PASSWORD_DEFAULT, ['const', 12]);
            echo $rehashed;

        } else {
            echo "No need to rehash";
        }
    }





    public function passwordmd5()
    {
        // => md5(sting,raw);

        // NOTE:: Raw Optional (TRUE,true,FALSE,false) 
        // TRUE/true = Raw 16 characters binary format 
        // FALSE/false = DEFAULT. 32 Character hax number 

        $passcode = "howareyou";
        echo "Before encrypt with md5 = " . $passcode . "<br>";
        echo "After encrypt with md5 = " . md5($passcode) . "<br>";
        echo "After encrypt with md5 by FALSE = " . md5($passcode, false) . "<br>";
        echo "After encrypt with md5 by TRUE = " . md5($passcode, true) . "<br>";

        $getpassword = "b47123e4109e6839adb7ae2a28300d96";
        // $getpassword = md5($passcode,TRUE); 

        if ($getpassword === md5($passcode)) {
            echo "Password Match with md5 32 chars hax number";
        } elseif ($getpassword === md5($passcode, TRUE)) {
            echo "Password Match with md5 16 raw chars binary format"; //can't match cuz it's binary 01
        } else {
            echo "Password do not match ";
        }


    }

    public function passwordsha1()
    {
        // => sha1(string,raw)
        // NOTE:: Raw Optional (TRUE,true,FALSE,false) 
        // TRUE/true = Raw 20 characters binary format 
        // FALSE/false = DEFAULT. 40 Character hax number 

        $passcode = "howareyou";
        echo "Before encrypt with md5 = " . $passcode . "<br>";
        echo "After encrypt with md5 = " . sha1($passcode) . "<br>";
        echo "After encrypt with md5 by FALSE = " . sha1($passcode, false) . "<br>";
        echo "After encrypt with md5 by TRUE = " . sha1($passcode, true) . "<br>";

        $getpassword = "b47123e4109e6839adb7ae2a28300d96";
        // $getpassword = md5($passcode,TRUE); 

        if ($getpassword === md5($passcode)) {
            echo "Password Match with md5 32 chars hax number <hr>";
        } elseif ($getpassword === md5($passcode, TRUE)) {
            echo "Password Match with md5 16 raw chars binary format <hr>"; //can't match cuz it's binary 01
        } else {
            echo "Password do not match ";
        }

    }



    public function passwordcrypt()
    {
        // =>crypt (string,key)


        $passcode = "ilovemyjob";
        $cryptkey = "fa;sdfapo";
        echo "Before encrypt with crypt = " . $passcode . "<br>";
        echo "After encrypt with crypt = " . crypt($passcode, $cryptkey) . "<br>";

        $getpassword = 'abIfY.EpQE2mU';

        if ($getpassword === crypt($passcode, $cryptkey)) {
            echo "Password Match";
        } else {
            echo "Password do not match";
        }


    }



    public function strongpassword()
    {
        $passcode = "ilovemyjob";

        $newpassword = md5($passcode);
        $newpassword = sha1($newpassword);
        $newpassword = crypt($newpassword, $newpassword);

        echo "Before encrypt = " . $passcode . "<br>";
        echo "After encrypt = " . $newpassword . "<br>";
        echo "After encrypt by single line = " . md5(sha1(crypt($passcode, $passcode))) . "<br>";


        $getpassword = "faTmgs46DbsVI";

        if ($getpassword === md5(sha1(crypt($passcode, $passcode)))) {
            echo "Password Match";
        } else {
            echo "Password do not match ";
        }

    }



    public function getciphermethod()
    {
        $ciphers = openssl_get_cipher_methods();
        echo "<pre>" . print_r($ciphers, true) . "</pre>"; //124 khu shi
    }
    public function customenctypt()
    {

    }

    public function customdecrypt()
    {

    }


}

echo "This is Encryption <br>";
$obj = new myencryption();
$obj->setpasscode(123);
$obj->passworddef();
echo "<br>";

$obj->passwordbcr();
echo "<br>";

$obj->passwordvry();
echo "<br>";

$obj->passwordmd5();
echo "<br>";

$obj->passwordsha1();
echo "<br>";

$obj->passwordcrypt();
echo "<br>";

$obj->strongpassword();
echo "<br>";

$obj->getciphermethod();
echo "<br>";

$obj->customdecrypt();
echo "<br>";
$obj->customenctypt();


// <!-- =>Decryption  -->

?>

<!-- 25CH  -->
<!-- 6:45 pm  -->