<?php


// Load Config 
require_once 'config/config.php';

//Import Libraries 
// require_once 'libraries/Controller.php';
// require_once 'libraries/Core.php';
// require_once 'libraries/Database.php';


// Load Libraries (Autoload )
spl_autoload_register(function ($classname) {
    require_once('libraries/' . $classname . '.php');
})
    ?>