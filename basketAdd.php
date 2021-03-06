<?php
session_start();
include_once"mysql.php";

$SellID = $_SESSION['SellID'];
$CusID = $_SESSION['CusID'];
$ProductImage = $_SESSION['ProductImage'];
$ProductName = $_SESSION['ProductName'];
$DeliveryOption = $_SESSION['DeliveryOption'];
$ProductCost = $_SESSION['ProductCost'];

$sql=mysqli_query($dbconnect, "insert into basket(basketID, SellID, CusID, ProductImage, ProductName, DeliveryOption, ProductCost) values('','$SellID','$CusID','$ProductImage','$ProductName','$DeliveryOption','$ProductCost')");

header('Location: basket.php'); 
?>