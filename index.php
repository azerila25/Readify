<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Readify</title>
    <link rel="stylesheet" href="style.css">
    <link 
    href="https://fonts.cdnfonts.com/css/bebas-neue" 
    rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/readifyicon.png" class="icon">
                
</head>
<body>
    <!---navigation bar--->
    <nav>
        <div class="logo">
            <h4>Readify</h4>
        </div>
        <ul>
            <li><a class="btn" href="index.php">Home</a></li>
            <li><a class="btn" href="aboutus.html">About</a></li>
            <li><a class="btn" href="loginpage.php">Login</a></li>
        </ul>
        
        <div class="menu-toggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!---headline--->
    <div class="container">
        <div class="header">
            <div class="hero">
                <h2 class="heading">READIFY BOOK & CONTENT</h2>
                <p class="sub-heading">Self Improvement</p>
            </div>
            <div class="features feature-1">
                <h4 class="price">Special Price</h4>
                <p class="item">Novel</p>
            </div>
            <div class="features feature-2">
                <h4 class="price">Hot Deals</h4>
                <p class="item">Philosophy</p>
            </div>
        </div>
    </div>

    <!---blog--->
    <section class="contain">
        <div class="row">
            <div class="content">
                <div class="card">
                    <div class="img"></div>
                    <h4>Why You Should use Readify?</h4>
                    <p>Readify will provide you fine loan experience. however, this is our first web development which there are a lot of lack from this prototype. we expect you to enjoy this.</p>
                </div>
                <div class="card">
                    <div class="img2"></div>
                    <h4>What is The Benefit of Reading Book?</h4>
                    <p>Everyone know that reading a book is the best way to reach a knowledge. Therefore, you have to read at least a page of a book everyday</p>
                </div>
                <div class="card">
                    <div class="img3"></div>
                    <h4>Did You Know?</h4>
                    <p>The first book mentioned was born in Egypt in the 2400s BC. The papyrus paper on which this writing was written the scroll formed the first form of a book.</p>
                </div>
            </div>
        </div>
    </section>

    <!---footer--->
    <footer class="footer">
        <div class="footer-left">
            <h3>Our Partner</h3>
            <div class="credit-cards">
                <img src="img/kompas-logo.png">
                <img src="img/gramedia-logo.png">
                <img src="img/republika-logo.jpg">
            </div>
            <p class="footer-copyright">2023 Readify</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Indonesia</span>Banten, Karawaci</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+62 813-2389-2687</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="#">muamir@gmail.com</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-about">
                <span>About</span>
                welcome to our official website
            </p>
            <div class="footer-media">
                <a href="#"><i class="fa fa-youtube"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>
    <!--  -->
    <script src="script.js"></script>
</body>
</html>