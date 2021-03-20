<?php
session_start();//Allows for php data to be saved
error_reporting(0);//prevent database errors showing on site
include_once"mysql.php";

$ProductID = $_GET["uid"];
$_SESSION['SellID'] = $ProductID;
$ProductID = $_SESSION['SellID'];


$product=mysqli_query($dbconnect, "CALL SearchProduct('$ProductID');");

//add product to recently viewed
while ($row = mysqli_fetch_array($product)){
    $_SESSION['ProductImage'] = $row['ProductImage'];
    $_SESSION['ProductName'] = $row['ProductName'];
    $_SESSION['Sold'] = $row['Sold'];

}

header('Location: recentlyViewedInsert.php'); 

?>