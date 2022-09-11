<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="Register.css" rel="stylesheet">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body style =" background-image: url(back1.jpg);  background-repeat: no-repeat; background-size: cover; background-color: black;">

<div class="textback">
    <h6 style="font-size:4vw; font-family: "Times New Roman", Times, serif; ">Welcome to <br> My Health Care!</h6>
    <p style="font-size:2vw;">Register HERE.</p>
</div>



<div class="loginbox">

    <img src="icon.jpeg" class="cup">
    <br>

    <h4 class="text-center"> My Health Care</h4> <h6 class="text-center">Health Management System</h6>
    <form  action="Reg.php" method="POST">

        <label><b> First Name </b></label>
        <input type="text" name="fname" id="fname" class="form-control" autocomplete="off">


        <label><b> Last Name </b></label>
        <input type="text" name="lname" id="lname" class="form-control" autocomplete="off">

        <label><b> Email </b></label>
        <input type="email" name="email" id="email" class="form-control" autocomplete="off">

        <label> <b>Password</b></label>
        <input type="password" name="password" id="password" class="form-control" autocomplete="off">


        <p><b> Already have an account?</b><br>
            <a href="loginForm.php"><b>Login here!</b></a></p>

        <button>Register</button>
    </form>

</div>
</body>
</html>
