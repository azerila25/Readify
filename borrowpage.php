<!---register Readify--->
<?php
session_start();

if(!isset($_SESSION["login"])){
    header ("Location: loginpage.php");
    exit;
}
    require 'functions.php';

    if(isset($_POST["borrow"])){
        if(borrows($_POST) > 0 )
        echo "<script>
                alert('user baru ditambah');
        </script>";
    } else {
        echo mysqli_error($conn);
    }   
    
    $conn = mysqli_connect("localhost", "root", "", "readify");

    $result = mysqli_query($conn, "SELECT * FROM data_buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="vieloginwport" content="width=device-width, initial-scale=1.0">
    <title>Readify Loan</title>
    <link rel="stylesheet" href="login-style.css">
    <link rel="shortcut icon" type="image/png" href="img/readifyicon.png" class="icon">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="" method="post" id="register">
                <h1>Book Loan</h1>
                <hr>
                <p></p>

                <label for="">Fullname</label>
                <input type="text" name="nama" id="nama" onkeypress="return onlylet(event);" placeholder="Your Fullname (Firstname and Surname)">
                <label for="">Book Title</label>
                <input type="text" name="judul_buku" id="judul_buku" placeholder="Input Book Title">
                <label for="">Email</label>
                <input type="text" name="email" id="email" placeholder="example@gmail.com">
                <label for="">Address</label>
                <input type="text" name="alamat" id="alamat" placeholder="Your Address">
                <label for="">Phone Number</label>
                <input type="text" name="telepon" onkeypress="return onlynum(event)" id="telepon" placeholder="Your Phone Number">
                <label for="">Loan Date</label>
                <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman">

                <button type="submit" value="simpan" name="borrow">Borrow Now!</button>
                <p>
                    <a class="link" href="beginpage.php">Back to Home</a>
                </p>
                <script type="text/javascript">
                    function onlylet(evt){
                        var charcode = (evt.which) ? evt.which : event.keycode
                        if (charcode > 31 && (charcode <48 || charcode > 57))
                        return true;
                        return false;
                    }
                    function onlynum(evt){
                        var charcode = (evt.which) ? evt.which : event.keycode
                        if (charcode > 31 && (charcode <48 || charcode > 57))
                        return false;
                        return true;
                    }
                </script>
            </form>
        </div>
        <div class="right">
            <img src="img/borrow.jpg" alt="">
        </div>
    </div>
</body>

</html>