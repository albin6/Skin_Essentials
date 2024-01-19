<?php 

session_start();
if( !isset($_SESSION["patient"]) ){
    header("location:../login.php");
    exit();
}

?>