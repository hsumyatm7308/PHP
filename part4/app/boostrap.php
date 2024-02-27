<?php


// Load Config 
require_once 'config/config.php';

// load helpers 
require_once 'helpers/redirect.php';


// load flashmessage 
require_once 'helpers/flashmessage.php';

// session_start();

// Load Libraries (Autoload )
spl_autoload_register(function ($classname) {
    require_once('libraries/' . $classname . '.php');
});



?>