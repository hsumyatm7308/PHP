<?php

// => Lambda Style 

function mycal($num1,$num2,$funone){
    $total = $num1+$num2;
    $funone($total);
}

$fun = function($result){
    echo "Total result is = ${result} <br>";
};


mycal(100,200,$fun); //Total result is = 300


echo "this is closure";

function showresult($addednum){
    echo "sum result is = ${addednum}";
}


$add = function ($x,$y){
    return $x+$y;
};

showresult($add(100,500)); //sum result is = 600;

$num1 = 300; 
$num2 = 400;


function colfun1(){
    global $num1,$num2;

    echo "this is regual funcliot" .$num1+$num2;
}

colfun1(); //700

$colfun2 = function() use($num1,$num2){
    echo "this is regual funciton ";
};

$colfun2; //700




// =>Larbda with Array work 
// array_walk(array,callbackfunction,parameter);

$color = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$idx = 0;

array_walk($color,function($val,$key,$p) use(&$idx){
    $idx++;
    echo "Id is {$idx} / Key is {$key} / value is {$val}{$p} <br>";
},"colour");



?>