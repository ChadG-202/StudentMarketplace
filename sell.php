<?php
$ProductName = $_POST['ProductName'];
$ProductCondition = $_POST['ProductCondition'];
$ProductDescription = $_POST['ProductDescription'];
$ProductCost = $_POST['ProductCost'];
$DeliveryOption = $_POST['DeliveryOption'];

$ProductImage = $_FILES['ProductImage']['name'];

$target = "ProductImages/".basename($ProductImage);

session_start(); 
$UserID = $_SESSION['CusID'];

$dbconnect=mysqli_connect('localhost', 'root', '', 'student_marketplace');

$sql=mysqli_query($dbconnect, "insert into sell(SellID,CusID,ProductName,ProductCondition,ProductDescription,ProductImage,ProductCost,DeliveryOption,Sold) values('','$UserID','$ProductName','$ProductCondition','$ProductDescription','$ProductImage','$ProductCost','$DeliveryOption','')") ;

if (move_uploaded_file($_FILES['ProductImage']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
}else{
    $msg = "Failed to upload image";
}

header('Location: index.php');
?>