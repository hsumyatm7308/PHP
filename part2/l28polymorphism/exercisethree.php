<?php 

abstract class vehicle{
    abstract public function start();
    abstract public function stop();
}



class Car extends vehicle{

  
    public function start(){
        return "Car Started <br>";
    }


    
    public function stop(){
        return "Car Stop <br>";
    }

    
    
  
}


class bike extends vehicle{

  
    public function start(){
        return "Bike Started <br>";
    }


    
    public function stop(){
        return "Bike Stop <br>";
    }

    
    
  
}

echo "This is Polymorphism concept with abstract <br>";

$obj1 = new Car();
echo $obj1->start();
echo $obj1->stop();

$obj2 = new Bike();
echo $obj2->start();
echo $obj2->stop();


?>