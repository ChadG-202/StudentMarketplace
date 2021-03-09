<?php
session_start(); 
include_once"mysql.php";

//setting data to store
$ProductName = $_POST['ProductName'];
$ProductCondition = $_POST['ProductCondition'];
$ProductDescription = $_POST['ProductDescription'];
$ProductCost = $_POST['ProductCost'];
$DeliveryOption = $_POST['DeliveryOption'];
$ProductCategory = $_POST['ProductCategory'];

//adding date product is added to store
$DateProductAdded = date("y/m/d");

//retriving file
//$ProductImage = $_FILES['ProductImage']['name'];

//storing file in ProductImage folder
//$target = "ProductImages/".basename($ProductImage);

//creates random name for file and stores it
$temp = explode(".", $_FILES["ProductImage"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["ProductImage"]["tmp_name"], "ProductImages/" . $newfilename);

//retrive stored customer ID
$UserID = $_SESSION['CusID'];

//input data into sell table
$sql=mysqli_query($dbconnect, "insert into sell(SellID,CusID,ProductName,ProductCondition,ProductDescription,ProductImage,ProductCost,DeliveryOption,Sold,ProductCategory,DateProductAdded) values('','$UserID','$ProductName','$ProductCondition','$ProductDescription','$newfilename','$ProductCost','$DeliveryOption','','$ProductCategory','$DateProductAdded')") ;

//check image stored
//if (move_uploaded_file($_FILES['ProductImage']['tmp_name'], $target)) {
    //$msg = "Image uploaded successfully";
//}else{
    //$msg = "Failed to upload image";
//}



//return to main page
header('Location: index.php');
?>