<?php

session_start();

if(!isset($_SESSION["login"])){
    header ("Location: loginpage.php");
    exit;
}

$conn = mysqli_connect("localhost", "root", "", "readify");

$result = mysqli_query($conn, "SELECT * FROM data_buku");
?>
<DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
        <title>Hello, bookworm</title>
        <link rel="shortcut icon" type="image/png" href="img/readifyicon.png" class="icon">
    </head>
    <body>
        <section class="main">
            <nav>
                <a class="logo"><img src="img/readifyicon.png" alt=""></a>
                <ul class="menu">
                    <li><a href="beginpage.php" class="active">Home</a></li>
                    <li><a href="" class="active">History</a></li>
                    <li><a href="aboutus2.html">About</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                    
                </ul>
                <a href="#" class="siteName">Readify</a>
            </nav>
            <section class="hero" id="home">
                <p>Readify</p>
                <h1>Find Your <span>Ideal</span> Books Here</h1>
                <p class="details">
                    'Aku rela di penjara asalkan bersama buku, karena dengan buku aku bebas'
                <p class="details">
                    - Mohammad Hatta
                </p>

                </p>
            </section>
        </section>
        <section class="featured" id="featured">
            <h1 class="heading">Our<span>Featured</span></h1>
            <div class="box-container">
                <div class="box">
                    <img src="img/tick.png" alt="">
                    <h3>Best and cool</h3>
                    <p>
                        We provide magnificient and fantastic books that you must read all of them for your brain's nutrition
                    </p>
                    <a href="best.html" class="btn">Read more</a>
                </div>
                <div class="box">
                    <img src="img/piggy-bank.png" alt="">
                    <h3>Cashless</h3>
                    <p>
                        Save your money and Reach more knowledge from our provider
                    </p>
                    <a href="cashless.html" class="btn">Read more</a>
                </div>
                <div class="box">
                    <img src="img/clock.png" alt="">
                    <h3>Long-Term Loan</h3>
                    <p>
                        We provide you to borrow our book collections even in a long time
                    </p>
                    <a href="longloan.html" class="btn">Read more</a>
                </div>
            </div>
        </section>
        <section class="product" id="product">
            <h1 class="heading">Top<span>Weekly</span></h1>

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
        <section class="catagories" id="catagories">
            <h1 class="heading">Book<span>Catagories</span></h1>
            <div class="box-container">
                <div class="box">
                    <img src="img/listnovel.jpg" alt="">
                    <h3>Novel Book</h3>
                    <a href="novelpage.php" class="btn">Find Out Here</a>
                </div>
                <div class="box">
                    <img src="img/listromance.jpg" alt="">
                    <h3>Sci-Fi Book</h3>
                    <a href="scifipage.php" class="btn">Find Out Here</a>
                </div>
                <div class="box">
                    <img src="img/listscifi.jpg" alt="">
                    <h3>Non-Fiction Book</h3>
                    <a href="nonficpage.php" class="btn">Find Out Here</a>
                </div>
                <div class="box">
                    <img src="img/listinter.jpg" alt="">
                    <h3>International Book</h3>
                    <a href="interpage.php" class="btn">Find Out Here</a>
                </div>
            </div>
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