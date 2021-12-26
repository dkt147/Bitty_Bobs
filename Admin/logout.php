<?php

//Removing and destroying session ...
session_start();

unset($_SESSION['id']);

session_destroy();
                
header("Location: http://localhost/LAB/Views/login.php");

?>