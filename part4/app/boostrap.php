<?php


// Load Config 
require_once 'config/config.php';


// Load Libraries (Autoload )
spl_autoload_register(function ($classname) {
    require_once('libraries/' . $classname . '.php');
})
    ?>