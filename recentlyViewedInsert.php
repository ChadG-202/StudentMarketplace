<?php
session_start();//Allows for php data to be saved
error_reporting(0);//prevent database errors showing on site
include_once"mysql.php";

$CusID = $_SESSION['CusID'];
$ProductID = $_SESSION['SellID'];
$image = $_SESSION['ProductImage'];
$name = $_SESSION['ProductName'];
$sold = $_SESSION['Sold'];

$query=mysqli_query($dbconnect, "SELECT * FROM recentlyviewed WHERE CusID = $CusID AND SellID = $ProductID");

//if already in recenlty viewed dont add otherwise add
if($row = mysqli_fetch_array($query)){
    header('Location: itemPage.php');  
}else{
    $sql=mysqli_query($dbconnect, "insert into recentlyviewed(CusID,SellID,ProductImage,ProductName,Sold) values('$CusID','$ProductID','$image','$name','$sold')");
    header('Location: itemPage.php');   
}

?>