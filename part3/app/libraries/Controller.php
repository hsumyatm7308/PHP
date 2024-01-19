<?php

class Controller
{
    public function view($view, $data = [])
    {
        //    mainpage/index 
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            die("Fild didn't exit");
        }
    }
}

?>