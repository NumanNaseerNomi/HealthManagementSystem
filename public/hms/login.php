
<?php
include "connection.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM loggedin WHERE email='$email' AND password='$password' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        ob_start();
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['loggedin'] = true;

        echo "<h1>Login successfull!</h1>";
        header("Refresh: 1;URL = index.html");
    } else {
        echo "not Logged in";
    }

?>