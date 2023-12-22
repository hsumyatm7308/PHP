<?php 

class news{
    public $article;

    public function __construct($val){
        $this->article = $val;
    }
}


function copyobject(news $obj1,news $obj2){
    $obj2->article = $obj1->article;
}
echo "this is Copy Object";

$news1 = new news("this is first ariticle");
$news2 = new news('htish is the second article');
echo "<br>";

echo $news1->article; //this is first artifcle 
echo "<br>";
echo $news2->article; //this is second article 

echo "<hr>";


?>