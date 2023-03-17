<?php
    // is_string(variable) Function 

    $va1 = "Save Myanmar";
    echo "val is ". is_string($val1). "<br>";

    $val2 = 0;
    echo "val2 is ".is_string($val2). "<br>";

    $val3 = 50;
    echo "val3 is ".is_string($val3). "<br>";

    //**** */
    $val4 = "50";
    echo "val4 is ".is_string($val4). "<br>";

    
    $val5 = true;
    echo "val5 is ".is_string($val5). "<br>";

    
    $val6 = "";
    echo "val6 is ".is_string($val6). "<br>";
    
    echo "<hr>";


    $val1 = 50;
    echo "val1 i " . is_numeric($val1) . "<br>";
    echo "val1 is ". is_int($val1) . "<br>";
    echo "val1 is ". is_integer($val1). "<br>";

    echo "<hr>";


    $val2 = 34.56;
    echo "val2 i " . is_numeric($val2) . "<br>";
    echo "val2 is ". is_int($val2) . "<br>";
    echo "val2 is ". is_integer($val2). "<br>";

    echo "<hr>";
    

    // ***** 
    $val3 = "50";
    echo "val3 i " . is_numeric($val3) . "<br>";
    echo "val3 is ". is_int($val3) . "<br>";
    echo "val3 is ". is_integer($val3). "<br>";

    echo "<hr>";
    

    $val1 = 50;
    echo "val1 is " . is_float($val1) . "<br>";
   
    $val2 = 34.45;
    echo "val1 is " . is_float($val2) . "<br>";

    $val3 = "50";
    echo "val1 is " . is_float($val3) . "<br>";
    echo "<hr>";


    // is_bool(variable) Function 

    $val1 = false;
    echo "val1 is " . is_bool($val1) . "<br>";
   
    $val2 = "true";
    echo "val1 is " . is_bool($val2) . "<br>";

    $val3 = 1;
    echo "val1 is " . is_bool($val3) . "<br>";
    echo "<hr>";


    // is_array() Function 

    $va1 = "Help Myanmer";
    echo "val1 is " . is_array($val1) . "<br>";

    $val2 = array("aung aung","su su");
    echo "vale is ". is_array($val2) . "<br>"; //1

    echo "<hr>";


    // is_null(variable) Function

    $va1 = 0;
    echo "val1 is " . is_null($val1) . "<br>";

    $val2 = null;
    echo "vale2 is ". is_null($val2) . "<br>"; //1

    $val3 = NULL;
    echo "val3 is " . is_null($val3) . "<br>";//1

    $val4 = "null";
    echo "val4 is " . is_null($val4) . "<br>";

    $val5 = ' ';
    echo "val5 is ". is_null($val5) . "<br>";


    echo "<hr>";

?>