<?php
session_start();

$_SESSION['CusID'] = null;
$_SESSION['CusFname'] = null;
$_SESSION['CusSname'] = null;

header('Location: index.php'); 
?>