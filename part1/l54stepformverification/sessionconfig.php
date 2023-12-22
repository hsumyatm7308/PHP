<?php 


session_start();

function setsession($key,$val){

    // assign lote tar 
    $_SESSION[$key] = $val;

}


function getsession($key){
    // ngar key pay tal, answer pyan pay tal
    return $_SESSION[$key];
}

function verifysession($key){
    return isset($_SESSION[$key]);
}


function unsersession($key){
    //d function run yin d work pal nin lote (asssign function)
    unset($_SESSION[$key]);
}


function destroyallession(){
    session_destroy();
}



function authcheck(){
    if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        return true;
    }
}

function redirectto($url){
    header("Location:$url");
}
?>