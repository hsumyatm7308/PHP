<?php 

// =>Data binding 
//   (i) Static Binding (or) Early binding
//  (ii) Dynamiv binding (or) Late binding 

//binding everything define program running / static binding / early binding 
// index.php > Compile > Execute   
// echo 1 + 1  1010110 > 2 



class hola1{
  public $name = "Ko KO";

  public function friend(){
    return "My best friedn name is ".$this->name . "<br>";

  }

  public function getfriend(){
    echo $this->friend();
  }


}


class hola2 extends hola1{
    public function friend(){
        return "My best friend name are ".$this->name. " and su su <br>";
    }
}

echo "This is binding";
echo "<br>";


$obj1 = new hola1();
echo $obj1->friend();
$obj1->getfriend();
echo "<br>";

$obj2 = new hola2();
echo $obj2->friend();  //My best friend name are Ko KO and su su
$obj2->getfriend();

echo "<hr>";





class hola3{
    public $name = "Ko KO";
  
    public function friend(){
      return "My best friedn name is ".$this->name . "<br>";
  
    }
  
    public function getfriend(){
        // echo self::friend(); //early binding 
        echo static::friend(); // late binding 
    }
  
  
  }
  
  
  class hola4 extends hola3{
      public function friend(){
          return "My best friend name are ".$this->name. " and su su <br>";
      }
  }
  
  echo "This is binding";
  echo "<br>";
  
  
  $obj3 = new hola3();
  echo $obj3->friend();
  $obj3->getfriend();
  echo "<br>";
  
  $obj4 = new hola4();
  echo $obj4->friend();  //My best friend name are Ko KO and su su
  $obj4->getfriend();
  
  echo "<hr>";

?>