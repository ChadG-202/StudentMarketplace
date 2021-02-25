<?php
$Forename = $_POST['Forename'];
$Surname = $_POST['Surname'];
$DOB = $_POST['DOB'];
$AddressLine1 = $_POST['AddressLine1'];
$AddressLine2 = $_POST['AddressLine2'];
$PostCode = $_POST['PostCode'];
$Email = $_POST['Email'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];

$dbconnect=mysqli_connect('localhost', 'root', '', 'student_marketplace');

$sql=mysqli_query($dbconnect, "insert into customer(CusID,CusFname,CusSname,CusDOB,CusAddressLine1,CusAddressLine2,CusPostCode,CusEmail,CusUsername,CusPassword) values('','$Forename','$Surname','$DOB','$AddressLine1','$AddressLine2','$PostCode','$Email','$Username','$Password')") ;

header('Location: index.html');

?>