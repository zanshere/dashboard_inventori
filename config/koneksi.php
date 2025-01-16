<?php 
$conn = mysqli_connect("localhost", "root", "Aditkontol123", "dashboard");

if($conn->connect_error){
    die("Can't Connect : " . $conn->connect_error);
}

?>