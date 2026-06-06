<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <!-- WEBSITE NAME -->
    <title>Wellness Wave</title>
    <!-- WEBSITE LOGO -->
    <link rel="icon" href="img/LOGOO_cropped.png">
    <!-- ICONS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- CSS LINK -->
    <link rel="stylesheet" href="CSS/afternav.css">
</head>

<body>

    <body>
        <!-- NAV STARTS -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>



                <div class="top">

                    <!-- NAV BAR IMAGE -->
                    <img src="img/Wellness Wave.png" alt="WellnessWave">

                    <!-- MENU BUTTON -->
                    <ul class="nav">
                        <!-- HOME -->
                        <li><a href="./home2.php">Home</a></li>
                        <!-- HOME CATEGORIES START -->
                        <li class="dropdown">
                            <a href="#" class="dropbtn">Categories
                                <i class="fa-solid fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-content">
                                <li><a href="./doc.php">Doctors</a></li>
                                <li><a href="./pharmacy.php">Pharmacy</a></li>
                                <li><a href="./Uhospital.php">Hospitals</a></li>
                                <li><a href="./Utrips.php">Trips</a></li>
                            </ul>
                        </li>
                        <!-- HOME CATEGORIES END -->
                        <!-- CONTACT -->
                        <li><a href="./contact.php">Contact Us</a></li>
                        <!-- LOG IN -->
                        <li>
                            <a href="./profile.php">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </li>
                        <li>
                            <a href="./login.php">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </a>
                        </li>

                    </ul>
                </div>



                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item d-sm-block d-md-none ">
                            <a class="nav-link active" aria-current="page" href="./home2.php">Home</a>
                        </li>
                        <li class="nav-item d-sm-block d-md-none ">
                            <a class="nav-link active" aria-current="page" href="./pharmacy.php">Products</a>
                        </li>
                        <li class="nav-item d-sm-block d-md-none ">
                            <a class="nav-link active" aria-current="page" href="./doc.php">Doctors</a>
                        </li>
                        <li class="nav-item d-sm-block d-md-none ">
                            <a class="nav-link active" aria-current="page" href="./Uhospital.php">Hospitals</a>
                        </li>
                        <li class="nav-item d-sm-block d-md-none ">
                            <a class="nav-link active" aria-current="page" href="./Utrips.php">Trips</a>
                        </li>
                        <li class="nav-item d-sm-block d-md-none ">
                            <a class="nav-link active" aria-current="page" href="./profile.php">My account</a>
                        </li>
                        <li class="nav-item d-sm-block d-md-none ">
                            <a class="nav-link active " aria-current="page" href="./login.php">Log Out</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <!-- NAV ENDS -->
        <!-- JAVABOOT -->
        <script src="JAVA/bootstrap.bundle.min.js"></script>
    </body>

</body>

</html>