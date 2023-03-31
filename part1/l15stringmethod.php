<?php

//    strlen() Function 
    //   strlen(string) 

    $words = "Save Myanmar";
    echo strlen($words);

    echo "<hr>";

    // str_word_count() Function 
    // str_word_count(string,return) 

    // 0 - default (string) 
    // 1 - return an array 
    // 2 - return an array 

    $words = "Save Myanmar Country";
    echo str_word_count($words); //3 
    echo "<br>"; 
    echo str_word_count($words,0); //3 
    echo "<pre>".print_r(str_word_count($words,1),"true")."<pre>";  //[0] => Save [1] => Myanmar
    echo "<pre>".print_r(str_word_count($words,2),"true")."<pre>";  // [0] => Save [5] =>Myanmar


    echo "<hr>";

    // ucwords()  Function 
    // ucwords(string,delimiter) 

    $words = "myanmar country";
    echo ucwords($words);
    echo "<br>"; 
    
    $words = "welcome to my/country";
    echo ucwords($words,"/");


?>
