<!---register Readify--->
<?php
    require 'functions.php';

    if(isset($_POST["register"])){
        if(registrasi($_POST) > 0 )
            echo "<script>
                alert('user has been added succesfully');
        </script>";
    } else {
        echo mysqli_error($conn);
    }    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="vieloginwport" content="width=device-width, initial-scale=1.0">
    <title>Readify Register</title>
    <link rel="stylesheet" href="login-style.css">
    <link rel="shortcut icon" type="image/png" href="img/readifyicon.png" class="icon">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="" method="post" id="register">
                <h1>Register</h1>
                <hr>
                <p></p>
                <label for="">First Name</label>
                <input type="text" name="first_name" id="first_name" onkeypress="return onlylet(event);" placeholder="Your First Name (Max. 20 Letters)">
                <label for="">Surname</label>
                <input type="text" name="surname" id="surname" onkeypress="return onlylet(event);" placeholder="Your Surname (Max. 20 Letters)">
                <label for="">Email</label>
                <input type="text" name="email" id="email" placeholder="example@gmail.com">
                <label for="">Password</label>
                <input type="password" name="password" id="password" placeholder="Password">
                <label for="">Confirm Password</label>
                <input type="password" name="password2" id="password2" placeholder="Replace your Password">
                <button type="submit" value="simpan" name="register">Register</button>
                <p>
                    <a class="link" href="loginpage.php">Login</a>
                </p>
                <script type="text/javascript">
                    function onlylet(evt){
                        var charcode = (evt.which) ? evt.which : event.keycode
                        if (charcode > 31 && (charcode <48 || charcode > 57))
                        return true;
                        return false;
                    }
                </script>
            </form>
        </div>
        <div class="right">
            <img src="img/register-book.jpg" alt="">
        </div>
    </div>
</body>

</html>