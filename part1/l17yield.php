<?php

// yield() Function 

function funone() {
    yield "1"; 
    yield "2"; 
    yield "3"; 
    yield "4"; 
}

$numbers = funone();

foreach($numbers as $number){
    echo $number . "<br>";
}

function funtwo() {
    $index = 0; 

    while($index < 10){
        yield $index;
        $index++;
    }
}


$numbers = funtwo();

foreach($numbers as $number){
    echo $number . "<br>";
}

echo "<hr>";


// yield withd from 

function funthree(){
    yield from [1,2,3,4,5];
    yield from [10,11,12,13,14,15];
}


foreach(funthree() as $number){
    echo $number . "<br>";
}

?>

