<?php 


//=> Spread Operator (...)

function sumresult($num1,$num2,$num3){
    return $num1+ $num2+$num3;

}

echo sumresult(1,2,3); //6
// echo sumresult([1,2,3]); //error
echo sumresult(...[1,2,3]); //6



echo "<br>";


function totalresult(){
    $arrs = func_get_args();
    echo "<pre>".print_r($arrs,true)."<pre>";

    echo count($arrs);//3 

    $total = 0;

    return $total;
}



function getval($val1,$val2,$val3){
    echo "${val1}";
    echo "${val2}";
    echo "${val3}";
}


getval("aung aung","maung maung","kyaw kyaw");
getval(...['red','green','blue']);

echo totalresult(10,20,30); //60


// => Spread Operator In Array 

$phones = ['apple','oppo','vivo','samsung'];
$cars = ['toyota','suziki','mazda'];
$computer = ['mac','aoc','acer'];


$myowns = [$phone,$cars,$computer];  //manual dimantion arry
$yourowns = [...$phones,...$cars,...$computer]; //manual aray


echo "This is Varadic function <br>";


echo "<br>";

function myfun1($val){
    return $val;
}


echo myfun1("mango"); //mango 
echo "<br>";

echo myfun1("mango","orange");

function myfun2(...$val){
    return $val;
}

echo myfun2(); //Array 

//echo myfun2("mango"); //Array 

echo myfun2("mango","orange"); //array 


echo "<pre>".print_r(myfun2("mango"),true)."</pre>";
echo "<pre>".print_r(myfun2("mango","oragne"),true)."</pre>";


echo "<pre>".print_r(myfun2(100,200,300),true)."</pre>";


// function myfun3(...$val){
//     echo $val(1) . "<br>";
// }

// myfun3("maung maung","aung aung","zaw zAw"); //arung aung 

// myfun3(['maung maung','aung aung','zaw zaw'],'su su'); //su su 


function myfun4(...$val){
    return $val[2] . $val[0][2] . $val[1];
}

echo myfun4(['maung maung','aung aung','zaw zaw'], "is my elder brothers","Mrs");

echo "<br>";


function myfun5(string $name,int ...$age):string {
    return "${name} is ${age[0]} years old";
}


echo myfun5("su su",25);

function myfun6(int ...$numbers):int{
    return array_sum($numbers);
}


echo myfun6(1,2,3); //6




// => null coalescing operator (??)

function myfun7(...$val){
    echo $val[1] ? "VAlid Data" : "No DATA";
    echo "<br>";

 
    echo $val[1] ??"No DATA";
    echo "<br>";

}

myfun7("Hello World","Dream Wold");  //"valid data  dream wokld
myfun7("Hello Wold"); //no data no data 


?>