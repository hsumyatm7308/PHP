<?php

class Core
{

    protected $curcontroller = "Mainpage";
    protected $curmethod = "index";
    protected $params = [];

    public function __construct()
    {
        // $this->geturl();

        // echo "<pre>" . print_r($this->geturl(), true) . "</pre>";

        // Get Class by first value  = Class
        $url = $this->geturl();
        if (file_exists("../app/controllers/" . ucwords($url[0]) . ".php")) {
            $this->curcontroller = ucwords($url[0]);

            echo $url[0] . "<br>";
            unset($url[0]);           // unset index 1 after used for as class 
            echo $url[0] . "<br>";
            echo "<pre>" . print_r($url, true) . "</pre>";

            // echo $this->$curcontroller . "<br>";
        }

        //Require Controller
        require_once("../app/controllers/" . $this->curcontroller . ".php");
        //Intantiate Contrller Class 
        $this->curcontroller = new $this->curcontroller;


        // Get Method by second value =   Method
        if (isset($url[1])) {
            if (method_exists($this->curcontroller, $url[1])) {
                $this->curmethod = $url[1];
                // echo $url[1] . "<br>";
                unset($url[1]);
                // echo $url[1] . "<br>";
                // echo "<pre>" . print_r($url, true) . "</pre>";
            }
        }

        echo $this->curmethod . "<br>";

        // Get Paramet by third value    = Argument
        $this->params = $url ? array_values($url) : [];
        echo "<pre>" . print_r($this->params, true) . "</pre>";

        // call_user_func_array([class,method],[argument]);
        call_user_func_array([$this->curcontroller, $this->curmethod], $this->params);


    }

    public function geturl()
    {

        // echo $_GET['url'];
        $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';

        // filter_var(string,filter)
        $url = filter_var($url, FILTER_SANITIZE_URL); //delete charref 
        $url = explode('/', $url);
        return $url;
    }
}

?>