<!---register Readify--->
<?php
    require 'functions.php';

    if(isset($_POST["borrow"])){
        if(borrows($_POST) > 0 )
        echo "<script>
                alert('user baru ditambah');
        </script>";
    } else {
        echo mysqli_error($conn);
    }   
    
    $conn = mysqli_connect("localhost", "root", "", "pomodify");

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
                <input type="text" name="nama" id="nama" placeholder="Your Fullname">
                <label for="">Book Title</label>
                <input type="text" name="judul_buku" id="judul_buku" placeholder="Input Book Title">
                <label for="">Email</label>
                <input type="text" name="email" id="email" placeholder="example@gmail.com">
                <label for="">Address</label>
                <input type="text" name="alamat" id="alamat" placeholder="Your Address">
                <label for="">Phone Number</label>
                <input type="text" name="telepon" id="telepon" placeholder="Your Phone Number">
                <label for="">Loan Date</label>
                <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman">
                <label for="">Return Date</label>
                <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian">

                <button type="submit" value="simpan" name="borrow">Borrow Now!</button>
                <p>
                    <a class="link" href="beginpage.php">Back to Home</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="img/borrow.jpg" alt="">
        </div>
    </div>
</body>

</html>