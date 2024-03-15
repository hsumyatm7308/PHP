<?php

class Controller
{
    public function view($view, $data = [])
    {
        // check view file exist or not 
        //   mainpage/index 
        if (file_exists('../app/views/' . $view . '.php')) {
            // require view file 
            require_once '../app/views/' . $view . '.php';
        } else {
            die("View file didn't exit");
        }
    }


    public function model($model)
    {
        // check model file exist or not 
        if (file_exists('../app/models/' . $model . '.php')) {
            // require model file 
            require_once '../app/models/' . $model . '.php';
            return new $model();
        } else {
            die("Model file didn't exit");
        }
    }


}

?>