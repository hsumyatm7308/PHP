<?php 

class myiterate{
    public $article ;
    public $comment = true;

    public function __construct($val){
        $this->article = $val;
    }

    function greeting(){
        echo "Hello World";
    }
}


echo "This is iterating objects";

$objs = new myiterate("This is new articles");
foreach($objs as $key => $obj){
    echo $key . "=".$obj. "<br>";
}

var_dump($obj);

echo "<hr>";

?>