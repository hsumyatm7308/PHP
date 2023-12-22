<?php 

class myclone{
   public function project($name){
    echo "I created a new ${name} projcect . <br>";
   }

   public function task(){
    echo ' I am new task';
   }

   public function __call($method,$vals ){
    echo "You not yet definded these = \"${$method}\" none-static method. so your value = " . "<pre>" . print_r($vals, true) . "<br>";


   }

   public static function exam(){
    echo "I am new exam <br>";
   }

   public static function __callStatic($method,$val ){
    echo "You not yet definded these = \"${$method}\" none-static method. so your value = " . "<pre>" . print_r($val, true) . "<br>";


   }
}




$obj1 = new myclone();
$obj1->project("POS");

$obj2 = clone $obj1;
$obj2->project('E-wallet');

echo "<hr>";

// method_exists(classname string,methodname string)
// if(method_exists('myclone','task')){
//     $obj1->task();
// }else{
//     $obj1->tasks();
// }



// if(method_exists($obj1,'task')){
//     $obj1->task();
// }else{
//     $obj1->tasks();
// }

// if(method_exists(new myclone,'task')){
//     $obj1->task();
// }else{
//     $obj1->tasks();
// }


if(method_exists(new myclone,'exam')){
    $obj1::exam();
}else{
    $obj1::exams();
}

?>