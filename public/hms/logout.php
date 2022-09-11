<?php
session_start();
unset($_SESSION['email']);
session_destroy();

echo "Logged out";
header("location:loginForm.php");

?>