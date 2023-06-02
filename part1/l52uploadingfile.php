
<?php 

if(isset($_POST['submit'])){
    echo "Hay";

    // $result = $_POST['profile'];
    // echo $result;

    $result = $_FILES;
    echo "<pre>".print_r($result,true)."</pre>";

    echo $_FILES['profile']['name'];
    echo "<br>";
    echo $_FILES['profile']['full_path'];
    echo "<br>";
    echo $_FILES['profile']['type'];
    echo "<br>";
    echo $_FILES['profile']['tmp_name'];
    echo "<br>";
    echo $_FILES['profile']['error'];
    echo "<br>";
    echo $_FILES['profile']['size'];
    echo "<br>";
};

// function getfilesize($filesize){

//    if(is_numeric($filesize)){
//     $idx = 0;
//     $prefix = ["Bit","Kb","Mb","Gb","Tb","Pb","Eb","Zb","Yb"];
//     $fixnum = 1024;

//     // echo $prefix[$idx];

//     while(($filesize/$fixnum) > 0.9){
//         $filesize = $filesize/$fixnum;
//         $idx++;
//     }

//     return round($filesize,2).' '.$prefix[$idx];

//    }else{
//     return "NaN";
//    }
// }

//  echo getfilesize(70000000);

// function getfilesize($filesize){
//      $idx = 0;
//      $fixnum = 1024;
//      $prefix = ["B","Kb","Mb","Gb","Tb","Pb","Eb","Zb","Yb"];

//      if($filesize < $fixnum){
//         return $filesize.' '.$prefix[$idx];

//      }else{
//         while($filesize > $fixnum){
//             $filesize = round($filesize/$fixnum,2);
//             $idx++;
//         }

//         return $filesize. ' '.$prefix[$idx];
//      }
// }

// echo getfilesize(7000000000);

// function getfilesizethree($filesize){
//      $size = filesize($filesize);
//      $fixnum = 1024;
//      $prefix = ["B","Kb","Mb","Gb","Tb","Pb","Eb","Zb","Yb"];

//     //  echo $size;

//      $power = $size > 0 ? floor(log($size,$fixnum)): 0;
//     //  log(574,1024) 
//     // floor(log(574,1024))

//      $result = round($size / pow($fixnum,$power),2) . ' '.$prefix[$power];
//     //   574/(1024/0)
//     //   574/1 = 574 
//      return $result;
// }

// echo getfilesizethree('l41userdeleteform.php');




$uploaddir = "assets/";
$uploadfile = $uploaddir.$_FILES['profile']['name'];
$uploadfile = $uploaddir.basename($_FILES['profile']['name']);
echo $uploadfile;

// move_uploaded_file(temp,actualpathandname);
if(isset($_POST['submit'])){
    if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
        echo "File Sucessfully uploaded";
    }else{
        echo "Try Again";
    }
}

// $uploaddir = "localhost/phpb3/assets/";
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']);
// $uploadsize = $_FILES['profile']['size'];

// if(isset($_POST['submit'])){
//     if(file_exists($uploadfile)){
//           echo "Failed";
//     }else{
//         if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//               echo "File Successfully Updaed";
//         }else{
//             echo "Try Again";
//         };
//     }
// }


// if(isset($_POST['submit'])){

//     if($uploadsize > 30000){
//         echo "Sorry, Your file is too large";
//     }else{

//         if(file_exists($uploadfile)){
//             echo "Failed";
//       }else{
//           if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//                 echo "File Successfully Updaed";
//           }else{
//               echo "Try Again";
//           };
//       }

//     }

   
// }



// $uploaddir = "localhost/phpb3/assets/";
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']);
// $uploadsize = $_FILES['profile']['size'];
// $uploadtype = pathinfo($uploadfile,PATHINFO_EXTENSION);

// // echo $uploadtype;
// if(isset($_POST['submit'])){

//     if($uploadtype !== 'jpg' && $uploadtype !== 'jpeg' && $uploadtype !== 'png'){
//         echo "Sorry, Your file is too large";
//     }else{
//         if(isset($_POST['submit'])){

//             if($uploadsize > 30000){
//                 echo "Sorry, Your file is too large";
//             }else{
        
//                 if(file_exists($uploadfile)){
//                     echo "Failed";
//               }else{
//                   if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//                         echo "File Successfully Updaed";
//                   }else{
//                       echo "Try Again";
//                   };
//               }
        
//             }
        
//     }

    
   
// }

// }

?>

<!-- 2RT -->



<!DOCTYPE html>
<html>
    <head>
        <title>Uploading File</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    </head>
    <body>
        
    <div class="col-md-6 mx-auto mt-5">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="profile">Profile Picture</label>
                <input type="file" name="profile" id="profile" class="form-control">
            </div>
            <input type="submit" name="submit" class="btn btn-primary float-end" value="Upload">
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    </body>
</html>



<!-- bit 
byte = 8 bit   -->


<!-- 1Mb = 1024kb instead of 1000kb 

2^0 = 1 
2^-1 = 1/2
2^-2 = 1/4 

2^3 = 8
2^2 = (2^3)/2 = 8/2 = 4
2^1 = (2^2)/2 =4/2 = 2 -->