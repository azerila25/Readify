<?php

session_start();
require 'functions.php';

if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //ambil username berdsrkn id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan user
    if( $key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if(isset($_SESSION["login"])){
    header("Location: beginpage.php");
    exit;
}


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
                <label for="">Email</label>
                <input type="text" name="email" id="email" placeholder="example@gmail.com" required>
                <label for="">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="">Remember Me</label>
                <input type="checkbox" name="remember" id="remember" required>
                <button type="submit" name="login">Login</button>
                <p>
                    <a class="link" href="index.php">Back to Home</a>
                    <a>|</a>
                    <a class="link" href="registerpage.php">Register</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="img/book-login.jpg" alt="">
        </div>
    </div>
</body>

</html>