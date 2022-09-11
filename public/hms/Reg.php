<?php
include "connection.php";


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO registered VALUE ('$fname', '$lname', '$email', '$password')";
$data = $conn->query($query);

if ($data) {
    echo "data inserted";
    header("Refresh: 1;URL = loginForm.php");
} else {
    echo "data not inserted";
}


?>