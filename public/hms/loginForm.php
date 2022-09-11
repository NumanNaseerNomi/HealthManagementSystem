<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="loginStyle.css" rel="stylesheet">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body style=" background-image: url(back1.jpg); background-repeat: no-repeat; background-size: cover; background-color: black">

<div class="textback">
    <h6 style="font-size:4vw; font-family: "Times New Roman", Times, serif; ">Welcome to <br> My Health Care!</h6>
    <p style="font-size:2vw;">Login to online Health Management System.</p>
</div>



<div class="loginbox">

    <img src="icon.jpeg" class="cup">
    <br>
    <h2 class="text-center"> My Health Care</h2> <h6 class="text-center">Health Management System</h6><br><br>
<form action="login.php" method="POST">

    <label><b> Email </b></label>
    <input type="email" name="email" id="email" class="form-control" autocomplete="off">

    <br>

    <label> <b>Password</b></label>
    <input type="password" name="password" id="password" class="form-control" autocomplete="off">
    <br><br>
    <p><b> Do not have an account?</b><br>
        <a href="RegForm.php"><b>Register Now!</b></a></p>

    <br>
    <button>Login</button>
    <br>


</form>

</div>
</body>
</html>
