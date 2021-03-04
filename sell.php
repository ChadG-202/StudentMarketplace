<?php
session_start(); 
include_once"mysql.php";

//setting data to store
$ProductName = $_POST['ProductName'];
$ProductCondition = $_POST['ProductCondition'];
$ProductDescription = $_POST['ProductDescription'];
$ProductCost = $_POST['ProductCost'];
$DeliveryOption = $_POST['DeliveryOption'];

//retriving file
$ProductImage = $_FILES['ProductImage']['name'];

//storing file in ProductImage folder
$target = "ProductImages/".basename($ProductImage);

//retrive stored customer ID
$UserID = $_SESSION['CusID'];

//input data into sell table
$sql=mysqli_query($dbconnect, "insert into sell(SellID,CusID,ProductName,ProductCondition,ProductDescription,ProductImage,ProductCost,DeliveryOption,Sold) values('','$UserID','$ProductName','$ProductCondition','$ProductDescription','$ProductImage','$ProductCost','$DeliveryOption','')") ;

//check image stored
if (move_uploaded_file($_FILES['ProductImage']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
}else{
    $msg = "Failed to upload image";
}

//return to main page
header('Location: index.php');
?>