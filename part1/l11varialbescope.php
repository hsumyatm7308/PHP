<?php

//Varialbles
// variable scope 
// (i)Global Variable Scrope 
// (ii)Local Variable Scopte
// (iii)static Variable scope\

$num1 = 100; //global variable 

function funone(){
    echo "Global Variable Variabe in function = $num1  <br>";

};

funone(); //Global Veriable in function = (no print out cuz function will generate an error)

echo "Global Variable print outside = $num1"; //Global Variable print outside = 100

echo "<hr>";

function funtwo(){
    $num2 = 200; //Local Variable 
    echo "Local Variable in function = $num2 <br>";
};
funtwo(); //Local Variable in function = 200 

echo "Local Variable print outside = $num2 <br>";//Local Variable print outside = (no print out cuz funtion will generate an error)

echo "<hr>";

$num3 = 300;
$num4 = 400;

function funthree(){
    global $num3;
    global $num4;

    global $num3,$num4;
    global $result;
    $result = $num3 + $num4;
    echo "this is result , print by funthree = $result <br>";
}

funthree();
echo "this is result, print outside = $result <br>";

echo "<hr>";

// superglobalvariable 

$num5 = 500;
$num6 = 600;

function funfive(){

    $GLOBALS["sum"] = $GLOBALS["num5"] + $GLOBALS["num6"];
    echo "This is sum , print by funfive = $sum <br>"; //4GLOBALS["sum"] is not variable 
}

 funfive();
 echo "This is sum , print outside = $sum <br>"; //This is sum , print outside = 1100

 echo "This is sum , print by funfive = $sum <br>"; //4GLOBALS["sum"] is not variable 

 echo "<hr>";


//  static Keyword 

$num7 = 700; 

function funseven(){
    global $num7;
    $num7++;
    echo "$num7 <br>";
}

funseven();//701
funseven();//701
funseven();//701

function funeight(){
    static $num8 = 800;
    $num8++;
    echo "$num8 <br>";
}

funeight();//801
funeight();//802
funeight();
funeight();
funeight();

echo "<hr>";

$num9 = 900;

function funnine($num9){
    $num9 = 90000;
    echo "$num9 <br>";
}

echo "$num9 <br>"; //900
funnine($num9); //90000
echo "$num9 <br>"; //900

$num10 = 10000;
 function funten(&$num10){
    $num10 = 10000;
    echo "$num10 <br>";
 }

 echo "$num10 <br>";//1000;
 funten($num10); //10000
 echo "$num10 <br>"; //10000;
 echo "$num10 <br>"; //10000;

 $name = "Aung Aung";

 function funname($val){
    $val = "kyaw kyaw";
    echo "$val <br>";
 }


 echo "$name <br>"; //Aung Aung 
 funname($name); //kyaw kyaw 
 echo "$name <br>" ; //kyaw kyaw 
 echo "$name <br>"; //kyaw kyaw

 $fullname = "Aung Tun Tun";

 echo "$name <br>"; //Aung Aung 
 echo "$fullname";ATT
 funname($funllname);//
 echo "$name ";//aa
 echo "$fullname";//kk
?>
