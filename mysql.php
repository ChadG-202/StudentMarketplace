<?php
//connection details
$servername = "sql207.epizy.com";
$username = "epiz_31913025";
$password = "zqKPW4yRLbXcnE"; 
$db="epiz_31913025_student_marketplace";     

//connection query
$mysqli = new mysqli($servername, $username,$password,$db);

// check connection 
if ($mysqli->connect_errno) {
    printf("Connect failed why oh why: %s\n", $mysqli->connect_error);
    exit();
}
?>