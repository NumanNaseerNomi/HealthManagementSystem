<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";
//connect to database
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
    echo "Connection Error!".mysqli_connect_error();
}else{
    echo "";
}




?>
