<?php
    //   User Defined Function 

    // function name(){
    //     code to be executed;
    // }
// ----------------------------------------------
    // Arguments Function
    // (i) Single 
    // (ii) Multi

    // function name(arg1){

    // }

    // function name(arg1,arg2){

    // }
// ---------------------------------------------

// Default Argument Function 

// function name($name="aung aung", $age = 20){
//     code to be exectued;
// }


// ----------------------------------

   function myfun(){
    echo "my name is mr.function";
   };

   myfun();

   echo "<hr>"; 

   function myfun1(){
    $num1 = 10;
    $num2 = 20;
    $cal = $num1 + $num2;
    echo $cal;
   };

   myfun1();

   echo "<hr>"; 

// ------------------------------------ 

   function singlefun($name){
    echo "My name is $name";

   };

   singlefun("Aung Aung");

   echo "<hr>"; 

//    -------------------------------------------

   function multifun($name,$age){
      
    echo "My name is {$name} and i am {$age} years old";

   };

   multifun("Zaw Zaw", 20 );

   echo "<hr>"; 


//    ------------------------------- 

    function defaultfun($name = "Hla Hla"){
        echo "My name is {$name} <br>";

    };

    defaultfun();  //my name is hla hla

    defaultfun("Aye Aye"); //my name is aye aye

   echo "<hr>"; 

   function defaultfun1($num1 = 10, $num2 = 20, $num3 = 30){
    $cal = $num1+$num2+$num3;
    echo $cal;
   };

   defaultfun1(); //60 
   defaultfun1(5,10,15); //30
   echo "<hr>"; 

//    ------------------------------------

    // function returnfun($num1){
    //     $cal = $num1 +10;
    //     return $cal;
    // };


    function returnfun($num1){
       return $cal = $num1 +10;
       
    };
  echo  returnfun(50);

  echo "<hr>"; 

  function returnfun1 ($num1,$num2,$num3){
    $cal = $num1+$num2+$num3;
    return $cal;
  };

  echo returnfun1(20,30,40); //90

  echo "<hr>"; 


   $task = "returnfun1";
   echo $task;

   echo $task(1,2,3);  //6

  echo "<hr>"; 


  if(function_exists($task)){
     echo "Yes, Your variable value is already in some kind of function";
  }else{
     echo "No";
  };



?>