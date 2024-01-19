<?php 

session_start();
if( !isset($_SESSION["hospital"]) ){
    header("location:../login.php");
    exit();
}

?>