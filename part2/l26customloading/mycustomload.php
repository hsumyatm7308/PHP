<?php

class mycustomload{
    public static function loader($classname){
        echo "Loading the class ${classname}";
        $file = str_replace("\\","/",$classname . ".php");

        if(file_exists($file)){
             require_once(__DIR__."/".$file);
        }else{
            echo "No file exists";
        }
    }

}




?>