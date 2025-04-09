<?php

session_start();
session_unset();
session_destroy();
header('location:login.php');

?><!-- For more projects: Visit codeastro.com  -->
