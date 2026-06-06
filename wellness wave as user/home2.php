<?php include("afternav.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- WEBSITE NAME -->
    <title>Wellness Wave</title>
    <!-- WEBSITE LOGO -->
    <link rel="icon" href="./img/LOGOO_cropped.png">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <!-- CSS LINK -->
    <link rel="stylesheet" href="CSS/home.css">
    <!-- ICONS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

    <!-- SLIDES START -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/bg1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Discover NOW</h5>
                    <p>We have the best hospitals in the Arab world. </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/siwa.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Book with us now !.</h5>
                    <p>Escape to paradise; Discover breathtaking landscapes, vibrant cultures, and unforgettable
                        memories.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Pharmacy.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Medicine right to your doorstep.</h5>
                    <p> We offer prescription medications,
                        health consultations, vaccinations, and wellness essentials.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDES END -->

    <!-- DOCTORS SECTION START -->
    <div class="section1">

        <div>
            <h1>Doctors</h1>
            <p class="desc">A selection of the most skilled and experienced doctors in their fields. </p>
        </div>

        <div>
            <!-- DOCTOR IMG -->
            <a href="doc.php">
                <img src="img/team.jpg" alt="">
            </a>
        </div>

    </div>
    <!-- DOCTORS SECTION END -->

    <!-- HOSPITALS SECTION START -->
    <div class="section2">

        <!-- HOSPITAL IMG -->
        <div>
            <a href="Uhospital.php">
                <video autoplay loop muted src="img/hospital.mp4"></video>
            </a>
        </div>

        <div>
            <h1>Hospitals</h1>
            <p class="desc">The best and most efficient hospitals in the Arab world.</p>
        </div>

    </div>
    <!-- HOSPITAL SECTION END -->

    <!-- TRIPS SECTION START -->
    <div class="section3">

        <div>
            <h1>Trips</h1>
            <p class="desc">Explore hidden gems, savor local flavors, and create your own adventure.</p>
        </div>

        <div>
            <!-- TRIP IMG -->
            <a href="Utrips.php">
                <img src="img/sec3.jpg" alt="">
            </a>
        </div>
    </div>
    <!-- TRIPS SECTION END -->

    <!-- SHOP NOW TITLE -->
    <h1 class="shop">
        SHOP NOW
    </h1>

    <!-- SHOP NOW CARDS START -->
    <div class="section4">

        <!-- CARD START -->
        <div class="cards">
            <!-- CARD IMAGE-->
            <img class="dr" src="img/product2.jpg" />

            <!-- PRODUCT NAME AND PRICE -->
            <div class="product-name-price">
                <!-- PRODUCT NAME -->
                <p>Herba Calcium Core</p>
                <!-- PRODUCT PRICE -->
                <p>349 LE</p>
            </div>

            <!-- BUY NOW BUTTON -->
            <button type="submit" class="btn3"><a href ="./pharmacy.php">Shop Now</a></button>
        </div>
        <!-- CARD END -->

        <!-- CARD START -->
        <div class="cards">
            <!-- CARD IMAGE-->
            <img class="dr" src="img/product4.jpg" />

            <!-- PRODUCT NAME AND PRICE -->
            <div class="product-name-price">
                <!-- PRODUCT NAME -->
                <p>Herba Calcium Core</p>

                <!-- PRODUCT PRICE -->
                <p>319 LE</p>
            </div>

            <!-- BUY NOW BUTTON -->
            <button type="submit" class="btn3"><a href ="./pharmacy.php">Shop Now</a></button>
        </div>
        <!-- CARD END -->

        <!-- CARD START -->
        <div class="cards">
            <!-- CARD IMAGE-->
            <img class="dr" src="img/product3.jpg" />

            <!-- PRODUCT NAME AND PRICE -->
            <div class="product-name-price">
                <!-- PRODUCT NAME -->
                <p>Herba Calcium Core</p>
                <!-- PRODUCT PRICE -->
                <p>299 LE</p>
            </div>

            <!-- BUY NOW BUTTON -->
            <button type="submit" class="btn3"><a href ="./pharmacy.php">Shop Now</a></button>
        </div>
        <!-- CARD END -->

    </div>
    <!-- SHOP NOW CARDS END -->
    <!-- BUTTON TO UP START -->
    <span class="up " id="up">
        <i class="fa-solid fa-up-long"></i>
    </span>
    <!-- BUTTON TO UP START -->


    <!-- JAVA LINK -->
    <script src="JAVA/bootstrap.bundle.min.js"></script>
    <script src="JAVA/home.js"></script>
</body>

</html>
<?php 
 include("footer.php");

?>