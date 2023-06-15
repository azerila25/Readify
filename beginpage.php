<?php
$conn = mysqli_connect("localhost", "root", "", "pomodify");

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
                <a href="#" class="logo"><img src="img/readifyicon.png" alt=""></a>
                <ul class="menu">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#featured">featured</a></li>
                    <li><a href="#product">product</a></li>
                    <li><a href="#catagories">catagories</a></li>
                    <li><a href="index.html">Log Out</a></li>
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
                <a href="#" class="download">Let's get started</a>
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
                    <a href="#" class="btn">Read more</a>
                </div>
                <div class="box">
                    <img src="img/shop.png" alt="">
                    <h3>Free Delivery</h3>
                    <p>
                        Don't worry about your orders, we made it simply for you. then your orders will arrive to you safely
                    </p>
                    <a href="#" class="btn">Read more</a>
                </div>
                <div class="box">
                    <img src="img/clock.png" alt="">
                    <h3>Fast Payment</h3>
                    <p>
                        When you transaction with us, we do fast and protect the transaction
                    </p>
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
        </section>
        <section class="product" id="product">
            <h1 class="heading">Our<span>Assets</span></h1>

            <?php while( $row = mysqli_fetch_assoc($result)) : ?>
            <div class="product-slider">
                <div class="wrapper">
                    <div class="box">
                        <img src="img/<?php echo $row["gambar"]; ?>" width="175" alt="">
                        <h3><?php echo $row["judul_buku"]; ?></h3>
                        <h5>Written By : <?php echo $row["penulis"]; ?></h5>
                        <div class="price"><?php echo $row["harga_buku"]; ?></div>                    
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
            <h1 class="heading">Asset<span>Catagories</span></h1>
            <div class="box-container">
                <div class="box">
                    <img src="img/listnovel.jpg" alt="">
                    <h3>Novel Book</h3>
                    <p>upto 80% off</p>
                    <a href="#" class="btn">Find Out Here</a>
                </div>
                <div class="box">
                    <img src="img/listromance.jpg" alt="">
                    <h3>Sci-Fi Book</h3>
                    <p>upto 50% off</p>
                    <a href="#" class="btn">Find Out Here</a>
                </div>
                <div class="box">
                    <img src="img/listscifi.jpg" alt="">
                    <h3>Romance Book</h3>
                    <p>upto 60% off</p>
                    <a href="#" class="btn">Find Out Here</a>
                </div>
                <div class="box">
                    <img src="img/listinter.jpg" alt="">
                    <h3>International Book</h3>
                    <p>upto 40% off</p>
                    <a href="#" class="btn">Find Out Here</a>
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
                       <a href="#" class="fa fa-facebook"></a>
                       <a href="#" class="fa fa-instagram"></a>
                       <a href="#" class="fa fa-twitter"></a>
                       <a href="#" class="fa fa-telegram"></a>
                    </div>
                </div>
                <div class="box">
                    <h3>Contact info</h3>
                    <a href="#" class="links"><i class="fa fa-phone"> +62 813-2389-2687</i></a>
                    <a href="#" class="links"><i class="fa fa-phone"> +62 896-5355-4870</i></a>
                    <a href="#" class="links"><i class="fa fa-phone"> +62 821-1369-9744</i></a>
                    <a href="#" class="links"><i class="fa fa-envelope"> muamir@gmail.com</i></a>
                    <a href="#" class="links"><i class="fa fa-map-marker"> Tangerang, Indonesia</i></a>
                </div>
                <div class="box">
                    <h3>Quick link</h3>
                    <a href="#" class="links"><i class="fa fa-arrow-right"> Home</i></a>
                    <a href="#" class="links"><i class="fa fa-arrow-right"> Featured</i></a>
                    <a href="#" class="links"><i class="fa fa-arrow-right"> Product</i></a>
                    <a href="#" class="links"><i class="fa fa-arrow-right"> Catagories</i></a>
                    <a href="#" class="links"><i class="fa fa-arrow-right"> Admins</i></a>
                </div>
                <div class="box">
                    <h3>Newsletter</h3>
                    <p>Subscribe for latest updates</p>
                    <input type="Email" placeholder="Enter your email" class="email">
                    <input type="submit" value="Subscribe" class="btn">
                </div>
            </div>
        </section>
    </body>
    </html>