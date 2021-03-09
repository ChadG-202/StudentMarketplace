<?php
session_start();//Allows for php data to be saved
include_once"mysql.php";

$SellID = $_GET["uid"];
$CusID = $_SESSION['CusID'];

//delete from database
$sql=mysqli_query($dbconnect, "DELETE FROM basket WHERE SellID = $SellID AND CusID = $CusID");

header('Location: basket.php'); 

?>