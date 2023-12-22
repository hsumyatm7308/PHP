<?php

class myregular{
    public function __construct(){
        

        $string = "We are family";

        // echo $string;

        // $result = preg_match("We are family",$string); //it's false = error 
        $result = preg_match("/We are family/",$string); //it's true 
        $result = preg_match("/family/",$string); //it's true 
        $result = preg_match("/mily/",$string); //it's true 
        $result = preg_match("/are /",$string); //it's true 
        $result = preg_match("/mily$/",$string); //it's true 
        $result = preg_match("/are$/",$string); //it's false 
        $result = preg_match("/ Family$/",$string); //it's false 

        $result = preg_match("/^Family/",$string); //it's false 
        $result = preg_match("/^are/",$string); //it's false 
        $result = preg_match("#^we#",$string); //it's false 
        $result = preg_match("/^We/",$string); //it's true 

        $result = preg_match("+^are$+",$string); //it's false 
        $result = preg_match("/^$/",$string); //it's false  Note:: string must be empty 
        $result = preg_match("/^we/i",$string); //it's true  

        $result = preg_match("/[b-d]/",$string); //it's false  
        $result = preg_match("/[a-f]/",$string); //it's true  
        $result = preg_match("/[a-z]/",$string); //it's true  
        $result = preg_match("/[A-Z]/",$string); //it's true  
        $result = preg_match("/[0-4]/",$string); //it's false  


        $string = "my lucky number is 567";



        $result = preg_match("/[0-4]/",$string); //it's false  
        $result = preg_match("/[5-9]/",$string); //it's true  
        $result = preg_match("/[a-z]/",$string); //it's true  
        $result = preg_match("/[A-Z]/",$string); //it's true  
        $result = preg_match("/[A-Z][a-z]/",$string); //it's true  
        $result = preg_match("/^[a-z]/",$string); //it's true  


        $result = preg_match("/[^a-z]/",$string); // it's true (it's mean not include a to z resute is true cuz $sting includes spacing and number) 
        $result = preg_match("/[^0-9]/",$string); // it's true (it's mean not include 0-9 resute is true cuz $sting includes spacing and number) 
        $result = preg_match("/[^0-4]/",$string); // it's true (it's mean not include 0-4 resute is true cuz $sting includes spacing and number) 


        $string = "admin@gmial.com";
        $result = preg_match("/@/",$string); // it's true 
        $result = preg_match("/m/",$string); // it's true 
        $result = preg_match("/m+/",$string); // it's true 
        $result = preg_match("/b+/",$string); // it's false 

        $result = preg_match("/b*/",$string); // it's true 
        $result = preg_match("/b?/",$string); // it's true 

        $result = preg_match("/m{1}/",$string); // it's true 
        $result = preg_match("/m{2}/",$string); // it's false 



        $string = "adminn@gmial.com";
        $result = preg_match("/n{2}/",$string); // it's false 
        $result = preg_match("/m{2,3}/",$string); // it's false 
        $result = preg_match("/\s/",$string); // it's false 

        $result = preg_match("/a\wm/",$string); // it's true    
        $result = preg_match("/a\w{1}m/",$string); // it's true 
        $result = preg_match("/a\w{2,4}m/",$string); // it's false . cuz any exact 2 to 4 w +ord    
        $result = preg_match("/a\w{2,}m/",$string); // it's false . cuz any exact 2 to nt w +ord    

        $result = preg_match("/\a.m/",$string); // it's false     
        $result = preg_match("/\a..m/",$string); // it's false     
        $result = preg_match("/\a.{1}m/",$string); // it's true     
        $result = preg_match("/\a.{2}m/",$string); // it's false  cuz any exact 2 words     
        $result = preg_match("/\a.{2,4}m/",$string); // it's false    cuz any exct to nth world  

  

        $string = "528";
        $result = preg_match("/\s/",$string); // it's true 
        $result = preg_match("/\d/",$string); // it's true    have digit 
        $result = preg_match("/\D/",$string); // it's false    have no digit 
        $result = preg_match("/\w/",$string); // it's true     
        $result = preg_match("/\W/",$string); // it's false     


        $string = "PHP";
        $result = preg_match("/.{2}/",$string); // it's true     


        $string = "Vvw";

        $result = preg_match("/.{2,}/",$string); // it's true      
        $result = preg_match("/^.{2}$/",$string); // it's true  (exact 2 characters)    

        $string = "welcome to our <i>programming class </i>";
        $result = preg_match("/<i>w*<\/i>/",$string); // it's false  cus spacing     
        $result = preg_match("/<i>.*<\/i>/",$string); // it's true       
        $result = preg_match("/<i>(.*)<\/i>/",$string); // it's true       
      

        $string = "pbbcc";
        $result = preg_match("/p(hp)*/",$string); // it's true     (hp is okay  by inclue or not )   
        $result = preg_match("/p(hp)+/",$string); // it's true     (hp must include )   



        $string = "admin@gmial.com";
        $result = preg_match('/^[a-z,A-Z]+@[a-z]+\.\w{3}/',$string);

        echo $result ? "it's true" : "it's false";


        echo "<hr>";

        // preg_replace (pattern,replacement,string)
        $string = "Are you ready to learn PHP Framework";
        $result = preg_replace('/php/i',"javascript",$string); //Are you ready to learn PHP Framework


        $result = preg_replace("/\s/","",$string); //AreyoureadytolearnPHPFramewor


        //Bracket Expressions 
        $string = "admin123@gmail .com";
        $result = preg_replace("/[[:space:]]/","x",$string); //admin123@gmailx.com
        $result = preg_replace("/[[:space:]]/","",$string); //admin123@gmail.com
        $result = preg_replace("/[[:alpha:]]/","",$string); //xxxx123@xxxx.xxx
        $result = preg_replace("/[[:digit:]]/","",$string); //adminxxx@gmail .com
        $result = preg_replace("/[[:alnum:]]/","",$string); //xxxxxx@xxx .xxx

        $result = preg_replace("/[[:punct:]]/","x",$string); //admin123xgmail.com
        $result = preg_replace("/[[:lower:]]/","x",$string); //xxxx123@xxxx.xxx
        $result = preg_replace("/[[:upper:]]/","x",$string); //xxxx123@xxxx.xxx



        echo  "$result <br>";

                                    //  no limit = 0 (or ) Null 
        // preg_split(pattern,string,limit,flags);

        $string = "My luck number is 007";
        $result = preg_split('/\s/',$string);

        echo "<pre>".print_r($result,true)."</pre>";

        echo "$result[0] <br>"; //My 
        echo "$result[1] <br>"; //lucky


        $result = preg_split("/\s/",$string,3);
        echo "<pre>".print_r($result,true)."</pre>";

        echo "$result[0] <br>"; //My 
        echo "$result[2] <br>"; //number is 007



        $string = "My luck number is 007 , but i got ticcket number 5700";
        $result = preg_split('/\s/',$string);
        echo "<pre>".print_r($result,true)."</pre>";

        $result = preg_split('/[\s]/',$string); // array  ထဲ ထည့်လိုက်လို့ space ကော ကော်မာ ကော ခွဲသွားတယ် 
        echo "<pre>".print_r($result,true)."</pre>";

        $result = preg_split('/\s,/',$string);
        echo "<pre>".print_r($result,true)."</pre>";


        $result = preg_split('/\s/',$string,NULL,PREG_SPLIT_NO_EMPTY);
        echo "<pre>".print_r($result,true)."</pre>"; 


        $result = preg_split('//',$string,NULL,PREG_SPLIT_NO_EMPTY); // ""  double code tway par count loh  
        echo "<pre>".print_r($result,true)."</pre>"; 





        // preg_quote()

        $string = "He\'s doctor?";
        $result = preg_quote($string);
        echo $result; //He\\'s doctor\?


        $result = preg_quote($string,"o");
        echo $result; // put \ infront of  o 





        // preg_match_all (pattern,string,return,flags)
        $string = "Winning numbers are 227-700 & 002-777 , but my ticket number is 007-222";
         preg_match_all('/\d+-\d+/',$string,$result,PREG_SET_ORDER);
        echo "<pre>".print_r($result,true)."</pre>";


        preg_match_all('/\d+-\d+/',$string,$result,PREG_PATTERN_ORDER);
        echo "<pre>".print_r($result,true)."</pre>";


        // lookahead & lookbehind 
        // (?=) posotive lookhead (or) regax lookahead  = right hand side 
        // (?!) negative lookhead                       = left hand side 

        // (?<=) positive lookbehind (or) regax lookbehind 
        // (?<!) negative lookbehind 

        $string = "ayungkyaw@cisco.com";
        $result = preg_match('/@(?=cisco)/',$string); //its true  //regax lookahead
        $result = preg_match('/(?<=@)cisco/',$string); //its true  //regax lookahead

        $result = preg_match('/@(?!cisco)/',$string); //its false  //negative lookahead
        $result = preg_match('/(?<!@)cisco/',$string); //its false  //regax lookahead


        echo $result ? "it's true" : "it's false";


        $strongpassword = "aB7#9";
        $result = preg_match('/(?=.*[a-z]) (=?.*(A-Z)(=?.*[0-9]) (?=.*[[:punct:]]))/',$strongpassword); //its false  //regax lookahead

        echo $result ? "it's true" : "it's false";



    }
}



echo "this is regular expression <br>";

$obj = new myregular();

echo "<hr>";

?>

 
<!-- $ must be in end ( case sensitive ) -->
<!-- ^ caret or curcumflex , must be in start  -->
<!-- i no case sensitive   -->

<!-- [] range a-z A-Z 0-9 -->
<!-- m+   m must be contain or more -->
<!-- * and ?  it can contain or not contain  -->
<!-- m{2} contain sample place m as per nth and more  -->
<!-- m{nth,nth} contain sample place m as per nth and more  -->
<!-- \s mean space    -->
<!-- \d mean digit  -->
<!-- \D mean have any no digit  -->
<!-- \w mean any word [A-z] [0-9]  -->
<!-- \W mean any word @#$%^&  -->
<!-- () mean this  -->
<!-- + mean must  -->
<!-- . mean any characters  -->
<!-- p(hp)* can be contain hp or not  -->
<!-- p(hp)+ must be contain hp  -->

<!-- [[:space:]] mean space  -->
<!-- [[:alpha:]] mean  instead of alpha  -->
<!-- [[:digit:]] mean  instead of number  -->
<!-- [[:alnum:]] mean  alphanumeric   -->
<!-- [[:punct:]] mean  instead of Punturation    -->
<!-- [[:lower:]] mean  instead of Punturation    -->
<!-- [[:upper:]] mean  instead of Punturation    -->




