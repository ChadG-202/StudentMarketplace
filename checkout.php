<?php
session_start();
include_once"mysql.php";

$CusID = $_SESSION['CusID'];
$query=mysqli_query($dbconnect, "CALL SearchBasket('$CusID');");

while ($row = mysqli_fetch_array($query)){
    $id = $row['SellID'];
    $sql=mysqli_query($dbconnect, "UPDATE sell SET Sold = 1 WHERE SellID = $id");
}

$delete=mysqli_query($dbconnect, "DELETE FROM basket WHERE CusID = $CusID");
header('Location: basket.php'); 
//doesnt work
?>