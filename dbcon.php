<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "ryphonemart";

$conn = mysqli_connect($servername, $username, $password, $databasename);
if(!$conn){
    die("Connection failed".mysqli_error);
}
?>