<?php

// echo  readfile("l43file.txt");
// echo filesize("l43file.txt");

// $fileopen = fopen("l43file.txt","r");
// if($fileopen){
//     // echo "Oki";
//     $fileread = fread($fileopen,filesize("l43file.txt"));
//     fclose($fileopen);

//     echo $fileread;
// }else{
//     echo "File Not Found !!!";
// }






// For Linux (Give Permission)
// sudo chmod 777 -R /var/www/html 
// sudo chmod 777 /var/www/html 

// $fileopen = fopen("l44file.txt","w");
// if($fileopen){
//     // echo "Oki";
   
//     fwrite($fileopen,"congratulation you can write");
//     $fileopen = fopen("l44file.txt","r");
//     $fileread = fread($fileopen,filesize("l44file.txt"));
//     fclose($fileopen);

//     echo $fileread;
// }else{
//     echo "File Not Found !!!";
// }



// log file tway many many lo chin yin   (x)  / write only, crate a new file. return FALSE if file already exists. 
// $fileopen = fopen("l45file.txt","x");
// if($fileopen){
//     // echo "Oki";
   
//     fwrite($fileopen,"congratulation you can write");
//    fclose($fileopen);

// }else{
//     echo "File Not Found !!!";
// }


// $fileopen = fopen("l45file.txt","c");
// if($fileopen){
//     // echo "Oki";
   
//     fwrite($fileopen,"I crate new file");
//     $fileopen = fopen("l46file.txt","c+");
//     $fileread = fread($fileopen,filesize("l46file.txt"));
//     fclose($fileopen);

//   echo $fileread;

// }else{
//     echo "File Not Found !!!";
// }





// $fileopen = fopen("l47file.txt","w");
// if($fileopen){
//     // echo "Oki";
//     $message = "Welcom to our class \n";
//     fwrite($fileopen,$message);

//     $message = "Thank you for using php file system.";

//     fwrite($fileopen,$message);

//     $fileopen = fopen("l47file.txt","r");
//     $fileread = fread($fileopen,filesize("l47file.txt"));
//     fclose($fileopen);
   
//     echo $fileread;

// }else{
//     echo "File Not Found !!!";
// }



// =>Append 

// $fileopen = fopen("l48file.txt","a");
// if($fileopen){
//     // echo "Oki";
//     $message = "Welcom to our class \n";
//     fwrite($fileopen,$message);

//     $message = "Thank you for using php file system.";

//     fwrite($fileopen,$message);

//     $fileopen = fopen("l48file.txt","r");
//     $fileread = fread($fileopen,filesize("l48file.txt"));
//     fclose($fileopen);
   
//     echo $fileread;
    
// }else{
//     echo "File Not Found !!!";
// }

// ---------------------------------------------------------- 

// =>Other File Functions 

// file_get_contents() = Read 
// fole_put_contents() = Write 
// file_exists() = check file exist or not 
// copy() = copies a file 
// rename()  = renames a file 
// unlink() = deletes a file 


// echo file_get_contents("l44file.txt");

// $existingfile = "l44file.txt";
// $newfile = "l49file.txt";
// $message = file_get_contents($existingfile);
// $message .= "\n Thank you for using php file system \n";
//  file_put_contents($newfile,$message) or die("Unable to open file");


// $existingfile = "l43file.txt";
// $newfile = "l50file.txt";

// if(file_exists($existingfile)){
//     $message = file_get_contents($existingfile);
//     $message = "\n Thank you php file";

//     file_put_contents($newfile,$message) or die("Unable to open file"); 
// }else{
//     echo "File Not Found";
// }


// $existingfile = "l43file.txt";
// $newfile = "l50file.txt";

// if(is_file($existingfile)){
//     $message = file_get_contents($existingfile);
//     $message = "\n Thank you php file";

//     file_put_contents($newfile,$message) or die("Unable to open file"); 
// }else{
//     echo "File Not Found";
// }


// $file = "l44file.txt";
// copy($file,"l51file.txt");
// echo file_get_contents("l51file.txt");


// $file = "l51file.txt";
// rename($file,"l52file.txt");
// echo file_get_contents("l52file.txt");



// $file = "l52file.txt";

// if(file_exists($file)){
//     unlink($file);
//     echo "File Delete Successfully";
// }else{
//     echo "File Not found";
// }

// =>Show all .txt file; 
// echo "<pre>".print_r(glob("*.txt"),true)."</pre>";

// =>Show all file 
echo "<pre>".print_r(glob("*.*"),true)."</pre>";


?>

<!-- PHP B  -->

<!-- 26PHP  -->