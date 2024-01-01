<?php

function funone($val1, $val2)
{
    echo __FUNCTION__, "values are $val1 and $val2";
}


class Hifi
{
    function funtwo($val1, $val2)
    {
        echo __METHOD__, "values are $val1 and $val2";
    }
}

funone(10, 20);
// call_user_func_array(callback,array);
call_user_func_array("funone", [100, 200]);


$obj = new Hifi();
$obj->funtwo(30, 40);

call_user_func_array([$obj, "funtwo"], [100, 200]);
call_user_func_array([$obj, "funtwo"], array(100, 200));





?>