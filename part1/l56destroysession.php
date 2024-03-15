<?php 


session_start();

// =>Single Destroy Sessoin 
// unset($_SESSION['idxcount']);

// echo "Single Session Destroy Successfully"; 

//=>All Destroy Session 

session_destroy();

echo "All Session Destroy Successfully";
?>