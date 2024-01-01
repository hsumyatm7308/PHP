<?php

class Core
{

    protected $curcontroller = "Mainpage";
    protected $curmethod = "index";
    public function __construct()
    {
        // $this->getrul();

        // Get Class by first value 
        $url = $this->geturl();
        if (file_exists("../app/controllers/" . ucwords($url[0]) . ".php")) {
            $this->curcontroller = ucwords($url[0]);

            echo $url[0] . "<br>";
            echo $url[0] . "<br>";
            // echo $this->$curcontroller . "<br>";
        }

        //Require Controller
        require_once("../app/controllers/" . ucwords($url[0]) . ".php");
        //Intantiate Contrller Class 
        $this->curcontroller = new $this->curcontroller;


        // Get Method by second value 
        if (isset($url[1])) {
            if (method_exists($this->curcontroller, $url[1])) {
                $this->curmethod = $url[1];
            }
        }

        echo $this->curmethod . "<br>";

        // Get Paramet by third value 

    }

    public function geturl()
    {
        $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';

        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
    }
}

?>