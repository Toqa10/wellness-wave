<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <!-- WEBSITE NAME -->
    <title>home</title>
    <!-- WEBSITE LOGO -->
    <link rel="icon" href="img/LOGOO_cropped.png">
    <!-- ICONS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- CSS LINK -->
    <link rel="stylesheet" href="CSS/ADhome.css">

</head>

<body>
    <!-- SIDE NAV START -->
    <div id="sideNav" class="side-nav d-none">
        <ul>
            <li>
                <a class=" btn-primary" href="./ADhome.php">Home</a>
            </li>
            <li>
                <a href="./ADproducts.php">Products</a>
            </li>
            <li>
                <a href="./ADdoctors.php">Doctors</a>
            </li>
            <li>
                <a href="./ADhospital.php">Hospitals</a>
            </li>
            <li>
                <a href="./ADtrips.php">Trips</a>
            </li>
            

            <li>
                <a href="./ADcustomer.php">Customers</a>
            </li>

           

            <li>
                <a href="./ADcontactus.php">Contact Us</a>
            </li>
            <li>
                <a class="danger" href="./index.php">Log Out</a>
            </li>
        </ul>
    </div>
    <!-- SIDE NAV END -->
    <!-- MAIN BODY START -->
    <!-- NAV START -->

    <div class="main close-nav" id="mainDiv">
        <!-- NAV START -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="./ADhome.php">WellnessWave</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <li class="nav-item ">
                        <a id="toggleBtn" class="nav-link " href="#" tabindex="-1" aria-disabled="true">
                            <i class="fa-solid fa-bars">
                            </i>
                        </a>
                    </li>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item d-sm-block d-md-none ">
                            <a class="nav-link active" aria-current="page" href="./ADhome.php">Home</a>
                        </li>
                        <li class="nav-item d-sm-block d-md-none ">
                            <a class="nav-link active" aria-current="page" href="./ADproducts.php">Products</a>
                        </li>
                        <li class="nav-item d-sm-block d-md-none ">
                            <a class="nav-link active" aria-current="page" href="./ADdoctors.php">Doctors</a>
                        </li>
                        <li class="nav-item d-sm-block d-md-none ">
                            <a class="nav-link active" aria-current="page" href="./ADhospital.php">Hospitals</a>
                        </li>
                        <li class="nav-item d-sm-block d-md-none ">
                            <a class="nav-link active" aria-current="page" href="./ADtrips.php">Trips</a>
                        </li>
                        
                        <li class="nav-item d-sm-block d-md-none ">
                            <a class="nav-link active" aria-current="page" href="./ADcustomer.php">Customers</a>
                        </li>
                       
                        <li class="nav-item d-sm-block d-md-none ">
                            <a class="nav-link active" aria-current="page" href="./ADcontactus.php">Contact Us</a>
                        </li>
                        <li class="nav-item d-sm-block d-md-none ">
                            <a class="nav-link active " aria-current="page" href="./index.php">Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <h1>HOME</h1>
        <div class="all-card">




            <div class="card" style="width: 18rem;">
                <img src="img/5871557e-0db1-4901-8448-6cf620b6103b.png" class="card-img-top" alt="..">
                <div class="card-body">
                    <h5 class="card-title">Products</h5>
                    <a href="./ADproducts.php" class="btn btn-primary">Move to the page!</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="img/Dr-garish.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Doctors</h5>
                    <a href="./ADdoctors.php" class="btn btn-primary">Move to the page!</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="adjust" src="img/Hospital-de-Bellvitge.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hospitals</h5>
                    <a href="./ADhospital.php" class="btn btn-primary">Move to the page!</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="adjust" src="img/IMG_0883.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Trips</h5>
                    <a href="./ADtrips.php" class="btn btn-primary">Move to the page!</a>
                </div>
            </div>
        </div>
    </div>


    <!-- BUTTON TO UP START -->
    <span class="up " id="up">
        <i class="fa-solid fa-up-long"></i>
    </span>
    <!-- BUTTON TO UP END -->



    <!-- JAVA STRAP -->
    <script src="java/bootstrap.bundle.min.js"></script>
    <!-- JAVA MAIN -->
    <script src="java/ADhome.js"></script>
</body>

</html>