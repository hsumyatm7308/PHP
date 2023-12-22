<?php

//Same Method Name has different implementation of that method 
interface greeting{
    public function speak();
}

class myanmar implements greeting{

  
    public function speak(){
        return "Mingalarpar";
    }
  
}

class thailand implements greeting{
    public function speak(){
      return "Sawadikap!";
    }
}

class english implements greeting{
    public function speak(){
      echo "Hello .. <br>";  
    }
}

function results($objs){
      foreach($objs as $obj){
        echo $obj->speak(). "<br>";
        
      }
}

echo "This is Polymorphism Concept <br>";

$datas = [
  new myanmar(),
  new thailand(),
  new english()
];

results($datas);
echo "<hr>";


?>