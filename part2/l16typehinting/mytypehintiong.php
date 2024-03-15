<?php

declare(strict_types=1);

class mytypehinting{
    public $name;
    public function getname():string{
        return $this->name;
    }

    public function setname(string $val):void{
         $this->name = $val;
    }
}


class person extends mytypehinting{
    public $userid;
    public $username;

    function setinfo(array $arr):void{
        $this->userid = $arr['id'];
        $this->username = $arr['name'];
    }
}

echo "this is type hintying";

$obj1 = new mytypehinting();
$obj1->setname("Aung Kyaw Kyaw");
echo $obj1->getname(); 


$obj2 = new person();
$obj2->setname("Su Su");
echo $obj2->getname(); 

$datas = ['id'=>1, 'name'=>"aye aye"];
echo $obj2->setinfo($datas);

echo $obj2->userid;
echo $obj2->username;

echo "<hr>";


?>