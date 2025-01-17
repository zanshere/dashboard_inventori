<?php 
$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DB_NAME");

if($conn->connect_error){
    die("Can't Connect : " . $conn->connect_error);
}

?>