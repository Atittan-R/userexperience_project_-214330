<?php 
    session_start();
    unset($_SESSION["UNAME"]);
    header("Location: index.php");
?>