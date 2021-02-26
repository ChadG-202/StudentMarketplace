<?php
$Username = $_POST['uname'];
$Password = $_POST['psw'];

echo($Username);
echo($Password);

$dbconnect=mysqli_connect('localhost', 'root', '', 'student_marketplace');

?>