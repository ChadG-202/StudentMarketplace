<?php
session_start();
include_once"mysql.php";

$CusID = $_SESSION['CusID'];

$delete=mysqli_query($dbconnect, "DELETE FROM basket WHERE CusID = $CusID");
header('Location: basket.php'); 

?>