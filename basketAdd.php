<?php
session_start();
include_once"mysql.php";

$SellID = $_SESSION['SellID'];
$CusID = $_SESSION['CusID'];
$ProductImage = $_SESSION['ProductImage'];
$ProductName = $_SESSION['ProductName'];
$DeliveryOption = $_SESSION['DeliveryOption'];
$ProductCost = $_SESSION['ProductCost'];

$query=mysqli_query($dbconnect, "SELECT * FROM basket WHERE CusID = $CusID AND SellID = $SellID");

//if in basket take them to location otherwise add to basket
if($row = mysqli_fetch_array($query)){
    header('Location: basket.php'); 
}else{
    $sql=mysqli_query($dbconnect, "insert into basket(basketID, SellID, CusID, ProductImage, ProductName, DeliveryOption, ProductCost) values('','$SellID','$CusID','$ProductImage','$ProductName','$DeliveryOption','$ProductCost')");
    header('Location: basket.php');  
}

?>