<?php
session_start();

//clear current user session variables
$_SESSION['CusID'] = null;
$_SESSION['CusFname'] = null;
$_SESSION['CusSname'] = null;

header('Location: index.php'); 
?>