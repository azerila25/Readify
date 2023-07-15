<?php

session_start();

if(!isset($_SESSION["login"])){
    header ("Location: loginpage.php");
    exit;
}
$conn = mysqli_connect("localhost", "root", "", "readify");

$result = mysqli_query($conn, "SELECT * FROM data_buku_novel");
?>
<DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
        <title>Novel Collections</title>
        <link rel="shortcut icon" type="image/png" href="img/readifyicon.png" class="icon">
    </head>
    <body>
        <section class="main">
            <nav>
                <a class="logo"><img src="img/readifyicon.png" alt=""></a>
                <ul class="menu">
                    <li><a href="beginpage.php" class="active">Home</a></li>
                    <li><a href="aboutus2.html">About</a></li>
                    <li><a href="index.html">Log Out</a></li>
                </ul>
                <a href="#" class="siteName">Readify</a>
            </nav>
            <section class="hero" id="home">
                <p>Readify</p>
                <h1>Find Your <span>Ideal</span> Books Here</h1>
                <p class="details">
                    'Jangan pernah menganggap remeh kekuatan sebuah buku. Buku bisa mengubah dunia.'
                <p class="details">
                    - Malala Yousafzai
                </p>

                </p>
            </section>
        </section>
       
        <section class="product" id="product">
            <h1 class="heading"><span></span></h1>
            <h1 class="heading">Novel<span>Collection</span></h1>

            <?php while( $row = mysqli_fetch_assoc($result)) : ?>
            <div class="product-slider">
                <div class="wrapper">
                    <div class="box">
                        <img src="img/<?php echo $row["gambar"]; ?>" width="175" alt="">
                        <h3><?php echo $row["judul_buku"]; ?></h3>
                        <h5>Written By : <?php echo $row["penulis"]; ?></h5>
                        <div class="price">Shop Price : <?php echo $row["harga_buku"]; ?></div>                    
                        <p><?php echo $row["premis"]; ?></p>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <a href="borrowpage.php" class="btn">Borrow Now</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </section>
        
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>Book</h3>
                    <p>
                        "You're the only one TREASURE"
                    </p>
                    <div class="share">
                       <a href="https://www.facebook.com/p/Ali-reza-bahtiar-100068325530155/" class="fa fa-facebook"></a>
                       <a href="#" class="fa fa-instagram"></a>
                       <a href="#" class="fa fa-telegram"></a>
                    </div>
                </div>
                <div class="box">
                    <h3>Contact info</h3>
                    <a class="links"><i class="fa fa-phone"> +62 813-2389-2687</i></a>
                    <a class="links"><i class="fa fa-phone"> +62 896-5355-4870</i></a>
                    <a class="links"><i class="fa fa-phone"> +62 821-1369-9744</i></a>
                    <a class="links"><i class="fa fa-envelope"> muamir@gmail.com</i></a>
                    <a class="links"><i class="fa fa-map-marker"> Tangerang, Indonesia</i></a>
                </div>
            </div>
        </section>
    </body>
    </html>