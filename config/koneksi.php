<?php 
$conn = mysqli_connect("localhost", "root", "zanshere", "retail_inventory");

if($conn->connect_error){
    die("Can't Connect : " . $conn->connect_error);
}

?>