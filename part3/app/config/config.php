<?php

// App Name 
define('APPNAME', 'PHP OOP PROJECT');


// URL Root 
define('URLROOT', 'http://localhost/PHP-master/part3/mainpage');


// App Root 
// echo __FILE__;  ///opt/lampp/htdocs/PHP-master/part3/app/config/config.phpmainpage
// echo dirname(__FILE__);  ///opt/lampp/htdocs/PHP-master/part3/app/configmainpage

// echo dirname(dirname(__FILE__)); // /opt/lampp/htdocs/PHP-master/part3/appmainpage

define('APPROOT', dirname(dirname(__FILE__)));

// DB Access 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'perumdej2');

?>