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
    echo "<pre>".print_r(str_word_count($words,1),true)."<pre>";  //[0] => Save [1] => Myanmar
    echo "<pre>".print_r(str_word_count($words,2),true)."<pre>";  // [0] => Save [5] =>Myanmar


    echo "<hr>";

    // ucwords()  Function 
    // ucwords(string,delimiter) 

    $words = "myanmar country";
    echo ucwords($words);
    echo "<br>"; 
    
    $words = "welcome to my/country";
    echo ucwords($words,"/");

    echo "<hr>";

    // ucfirst() Function 
    // ucfirst(string) 

    $words = "welcome to my country";
    echo ucfirst ($words); //Welcome to my country 

    echo "<hr>";


    // lcfirst() Function 
    // lcfirst(string) 

    $words = "Welcome To My Country" ;
    echo lcfirst($words); //welcome To My Country 

    echo "<hr>";

    // strtoupper() Function 
    // strtoupper(string) 

    $words = "WELCOME to My Country";
    echo strtoupper($words); //

    echo "<br>"; 



    // strtolower() Function 
    echo strtolower($words); //

    echo "<hr>";



    // chunk_split() Function 
    // chunk_split(string,length,end) 

    $words = "Myanmar Country";
    echo chunk_split($words,1,"."); 

    echo "<br>";

    echo chunk_split($words,3,"-"); 

    echo "<hr>";


    // substr() Function 
    // substr(string,start,length) 

    $words = "Welcome Myanmar";
    echo substr($words,0); 
    echo "<br>";

    echo substr($words,1); 
    echo "<br>";

    echo substr($words,0,8); 
    echo "<br>";

    echo substr($words,0,9); 
    echo "<br>";

    
    echo "<hr>";

     // str_replace() Function 
    // str_replace(find,replace,string) 
    echo str_replace("Myanmar","CRRPH","Save Myanmar"); 

    echo "<hr>";


    // echo substr_replace(string,replacement,start,length) 
    $words = "Weclome Myanmar";

    echo "<br>";

    echo substr_replace($words,"Hello",0);
    echo "<br>";

    echo substr_replace($words,"Hello",8);
    echo "<br>";


    echo substr_replace($words,"Hello",0,0); 
    echo "<br>";

    echo substr_replace($words,"Hello",0,5); 
    echo "<br>";


    echo "<hr>";


    // trim () Function 
    // trim(string,charlist) 

    $words = "Welcome to My Country";
    echo trim($words,"Wel"); //come to My Country 
    echo "<br>";
    echo trim($words,"try"); //come to My Country 
    echo "<br>";

    echo "<hr>";


    // str_repeat() Function 
    // str_repeat(string,count) 
    echo str_repeat("A Kyal Gyi ",3); 



    // explode() Function 
    // explode(separator,sting,limit)  

    $words = "Welcome to My Country";
     echo "<pre>".print_r(explode(" ",$words),true)."<pre>";

     echo "<pre>".print_r(explode(" ",$words,0),true)."<pre>";

     echo "<pre>".print_r(explode(" ",$words,1),true)."<pre>";
     echo "<pre>".print_r(explode(" ",$words,2),true)."<pre>";
     echo "<pre>".print_r(explode(" ",$words,3),true)."<pre>";

    echo "<hr>";

    // Implode() Function 
    // Implode(sepatator,array) 
    $words = ["Welcome", "to", "My", "Countr"];

    echo "<pre>".print_r(implode(" ",$words),true)."<pre>";
    echo "<pre>".print_r(implode("-",$words),true)."<pre>";

    echo "<hr>";

    // join() Function 
    // join(separator,array) 
    echo "<pre>".print_r(join(" ",$words),true)."<pre>";
    echo "<pre>".print_r(join("- ",$words),true)."<pre>";

    echo "<hr>";

    // number_format() Function 
    // number_format(number,decimals) 
    echo number_format("10000000"). "<br>"; 
    echo number_format("10000000",2). "<br>"; 

    echo "<hr>";
    
    // stripslashes(string) 
    $str = "he\'s my father";
    echo $str;
    echo "<hr>";

    echo stripcslashes($str);



    // basename()
    $path ="./assets/img/cover.jpg";
    echo $path ."<br>"; 
    echo basename($path) ."<br>";
    echo basename($path,".jpg") ."<br>";


    // pathinfo() Function 

    // PATHINFO_DIRNAME
    // PATHINFO_BASENAME
    // PATHINFO_EXTENSION
    // PATHINFO_FILENAME

    $filepath = "./assets/img/user/cover.jpg";
    echo "<pre>".print_r(pathinfo($filepath),true)."</pre>";

//     Array
// (
//     [dirname] => ./assets/img/user
//     [basename] => cover.jpg
//     [extension] => jpg
//     [filename] => cover
// )
    
    echo pathinfo($filepath,PATHINFO_DIRNAME);
    echo "<br>";
    echo pathinfo($filepath,PATHINFO_BASENAME);
    echo "<br>";
    echo pathinfo($filepath,PATHINFO_EXTENSION);
    echo "<br>";
    echo pathinfo($filepath,PATHINFO_FILENAME);


?>