<?php
session_start();
include_once"mysql.php";

$CusID = $_SESSION['CusID'];
$CheckoutDate=date("Y-m-d");

$select=mysqli_query($dbconnect, "SELECT * FROM basket WHERE CusID = $CusID");

//Delete all items in basket store user, customer and item details in sold database and set items to sold
while ($row = mysqli_fetch_array($select)){
    $SellID = $row['SellID'];
    $SetSold = mysqli_query($dbconnect, "UPDATE sell SET Sold = 1 WHERE SellID = $SellID");
    $Checkout = mysqli_query($dbconnect, "INSERT INTO checkout(CusID,SellID,CheckoutDate) VALUES($CusID,$SellID,'$CheckoutDate')");
    //clear customer basket items
    $delete=mysqli_query($dbconnect, "DELETE FROM basket WHERE SellID = $SellID");
}


header('Location: basket.php'); 

?>