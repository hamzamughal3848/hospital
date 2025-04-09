<?php
    session_start();
    if(!isset($_SESSION['islogedin']) OR $_SESSION['islogedin']!=true){
    header('Location: login.php');
    exit;
    }
    
 ?>
