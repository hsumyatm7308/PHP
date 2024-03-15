<?php

// => include or require 


// include "path/filename.fileformat";
// include ("path/file.fileformat");
// require ("path/filename.fileformat");
// require "path/filename.fileformat";

echo "This is Artical 1 <br>";

include ("./l34headerpage.php");
require ("./l35contentpage.php");
require ("./l36footerpage.php");


echo "This is Artical 3 <br>";

include ("./l34headerpage.php");
require ("./l35contentpage.php");
require ("./l36footerpage.php");



echo "This is Artical 3 <br>";

include ("./l34headerpage.php");
require ("./l35contentpage.php");
require ("./l36footerpage.php");


echo "This is Artical 3 <br>";

include ("./l34headerpage.php");
require ("./l35contentpage.php");
require ("./l36footerpage.php");

echo "This is Artical 2 by inclue_once";
include_once("l34headerpage.php");
include_once ("./l35contentpage.php");
include_once ("./l36footerpage.php");

?>