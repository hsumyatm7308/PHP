<?php


class mysro{

    const GREETING = "Hello Fried. Good evening from Thailand";

    public $fullname = "Aung Kyaw Kyaw";

}

echo "This is Scope Resolution Operator"."<br>";

$obj = new mysro();

echo $obj->fullname . "<br>";
echo $obj::GREETING . "<br>";
echo mysro::GREETING. "<br>";

?>


