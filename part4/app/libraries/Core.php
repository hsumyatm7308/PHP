<?php

class Core
{

    protected $curcontroller = "Mainpage";
    protected $curmethod = "index";
    protected $params = [];

    public function __construct()
    {

        $url = $this->geturl();
        if (file_exists("../app/controllers/" . ucwords($url[0]) . ".php")) {
            $this->curcontroller = ucwords($url[0]);


            unset($url[0]);           // unset index 1 after used for as class 


        }

        //Require Controller
        require_once("../app/controllers/" . $this->curcontroller . ".php");
        //Intantiate Contrller Class 
        $this->curcontroller = new $this->curcontroller;


        // Get Method by second value =   Method
        if (isset($url[1])) {
            if (method_exists($this->curcontroller, $url[1])) {
                $this->curmethod = $url[1];
                unset($url[1]);

            }
        }

        // echo $this->curmethod . "<br>";

        // Get Paramet by third value    = Argument
        $this->params = $url ? array_values($url) : [];

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