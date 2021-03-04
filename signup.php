<?php
include_once"mysql.php";
require"encrypt-decrypt.php";

//setting data to store
$Forename = $_POST['Forename'];
$Surname = $_POST['Surname'];
$DOB = $_POST['DOB'];
$AddressLine1 = $_POST['AddressLine1'];
$AddressLine2 = $_POST['AddressLine2'];
$PostCode = $_POST['PostCode'];
$Email = $_POST['Email'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];

//encryption key
$key = md5('hjsjJKWKsksskKK');

//data to be encrypted
$Forename = encrypt($Forename, $key);
$Surname = encrypt($Surname, $key);
$AddressLine1 = encrypt($AddressLine1, $key);
$AddressLine2 = encrypt($AddressLine2, $key);
$PostCode = encrypt($PostCode, $key);
$Email = encrypt($Email, $key);
$Password = encrypt($Password, $key);

//store data in customer table
$sql=mysqli_query($dbconnect, "insert into customer(CusID,CusFname,CusSname,CusDOB,CusAddressLine1,CusAddressLine2,CusPostCode,CusEmail,CusUsername,CusPassword) values('','$Forename','$Surname','$DOB','$AddressLine1','$AddressLine2','$PostCode','$Email','$Username','$Password');");
//return to main page
header('Location: index.php'); 

// $query=mysqli_query($dbconnect, "CALL SearchCustomer('$Username');");
// if(mysqli_num_rows($query) > 0){
//     header('Location: signup.html');
// }else{

// }






//validate email is real
//check if email already registered
//validate username isnt taken
//check if password meets criteria

?>