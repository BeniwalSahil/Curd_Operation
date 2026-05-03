<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "amazon_clone";

$conn = mysqli_connect($servername,$username,$password, $database);

if($conn){
    echo "Connection Successful!";
} else {
    echo "Connection Failed: " . mysqli_connect_error();
}
?>