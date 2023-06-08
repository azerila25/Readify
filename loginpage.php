<?php
 require 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="vieloginwport" content="width=device-width, initial-scale=1.0">
    <title>Readify Login</title>
    <link rel="stylesheet" href="login-style.css">
    <link rel="shortcut icon" type="image/png" href="img/readifyicon.png" class="icon">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="" method="post" id="login">
                <h1>Login</h1>
                <hr>
                <p></p>
                <label for="">Email</label>
                <input type="text" name="email" id="email" placeholder="example@gmail.com" required>
                <label for="">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
                <p>
                    <a class="link" href="#">Forgot Password?</a>
                    <a>|</a>
                    <a class="link" href="registerpage.php">Register</a>
                </p>
                <p>
                    <a class="link" href="index.html">back to Home</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="img/book-login.jpg" alt="">
        </div>
    </div>
</body>

</html>