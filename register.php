<?php
include("db.php");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "INSERT INTO users(fullname,email,phone,password)
VALUES('$fullname','$email','$phone','$password')";

if(mysqli_query($conn, $sql)){
    echo "Registration Successful!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>