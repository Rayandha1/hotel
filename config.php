<?php

$server = "localhost";
$username = "bluebird_user";
$password = "password";
$database = "boking_php";

$conn = new mysqli($server,$username,$password,$database);

if($conn->connect_error){
    die("<script>alert('Connection Failed: " . $conn->connect_error . "')</script>");
}
// else{
//     echo "<script>alert('Connection successfully.')</script>";
// }
?>