<?php
    include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body>
    <header>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="front3.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="front2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="front1.jpg" style="width:100%">
            </div>
            <div class="main">
        <ul>
            <ul class="list">
                <li class="logo"><a href="mainPage.php"><img src="logo.png" alt="Logo" style="width:36px;height:36px"></a></li>
                <div class="search">
                    <form method="POST" action="info.php">
                        <input type="text" name="search_p" placeholder="Search.." size="50">
                        <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 65px; bottom: 55px;">
                    </form>
                </div>
                    </ul>
                    <ul class="list2">
                        <li class="active-menu"><a href="mainPage.php">Home</a></li>
                        <li><a id="long" href="destination.php">Destination</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                        <li><a href="signin.php">Logout</a></li>
                    </ul>
                </ul>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </header>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <div class="title">
        <h1>BEST TO FIND AND EXPLORE THAT ALL YOU NEED</h1>
    </div>
    <div class="contain">
        <div class="heading">
            <h2>EXPLORE</h2>
            <p><b>Explore new places, culture around Marinduque<br></b></p>
        </div>

        <div class="box">
            <div class="imgBox">
                <img src="images//destination//mb1.png" alt="Tourist Image" style="width: auto; height: 270px;">
            </div>
            <div class="name-text">
                <h2>Buenavista</h2>
                <a href="destination.php" class="btn">Visit</a>
            </div>
        </div>

        <div class="box">
            <div class="imgBox">
                <img src="images//destination//mb.jpg" alt="Tourist Image" style="width: auto; height: 270px;">
            </div>
            <div class="name-text">
                <h2>Boac/Gasan</h2>
                <a href="destination.php" class="btn">Visit</a>
            </div>
        </div>

        <div class="box">
            <div class="imgBox">
                <img src="images//destination//ms.png" alt="Tourist Image" style="width: auto; height: 270px;">
            </div>
            <div class="name-text">
                <h2>Sta. Cruz</h2>
                <a href="destination.php" class="btn">Visit</a>
            </div>
        </div>

        <div class="box">
            <div class="imgBox">
                <img src="images//destination//mt.jpg" alt="Tourist Image" style="width: auto; height: 270px;">
            </div>
            <div class="name-text">
                <h2>Torrijos</h2>
                <a href="destination.php" class="btn">Visit</a>
            </div>
        </div>

        <div class="destination-btn">
            <a href="destination.php">View all</a>
        </div>
    </div>
    <div class="about">
        <h2>About Us</h2>
        <footer>
            <p><b>Marinduque, a heart-shaped island province in the Philippines, is a gem of natural beauty and cultural richness. It is the quintessential Philippine island paradise, with pristine beaches, lush mountains, and a vibrant local culture. To manage and promote this remarkable destination, the Marinduque Tourism Management System has been established.<br>
            <p><b>This system is structured with the primary aim of enhancing the tourist experience while simultaneously preserving the natural and cultural heritage of Marinduque. It acknowledges the delicate balance that needs to be maintained between tourism development and environmental conservation, which is critical in an era of increasing ecological awareness and responsibility.<br>
            <p><b>Created by: BSIT/2D<br>
            <p><b>Contact Information: website.com@gmail.com<br></p>
            <p><b>Contact Information: website.com@gmail.com<br></p>
            <a href="https://www.facebook.com/"><img src="images/logo/facebook.png" height="25px" width="25px"></a>
            <a href="https://www.instagram.com/"><img src="images/logo/instagram.png" height="25px" width="25px"></a>
            <a href="https://twitter.com/"><img src="images/logo/twitter.png" height="25px" width="25px"></a>
        </footer>
    </div>

    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
    </script>
</body>
</html>