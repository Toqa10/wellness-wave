<?php
include("connection.php");
$join ="SELECT * FROM `contact_us` JOIN `customer` ON `contact_us` . `customer_id` = `customer` . `customer_id`";
$run =mysqli_query($connect,$join);

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $delete = "DELETE FROM `contact_us` WHERE `contactus_id` =$id ";
    $run_delete=mysqli_query($connect,$delete);
    header("location:ADcontactus.php");
  
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <!-- WEBSITE NAME -->
    <title>Contact us</title>
    <!-- WEBSITE LOGO -->
    <link rel="icon" href="img/LOGOO_cropped.png">
    <!-- ICONS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- CSS LINK -->
    <link rel="stylesheet" href="CSS/ADcontactus.css">

</head>

<body>
    <!-- SIDE NAV START -->
    <div id="sideNav" class="side-nav d-none">
        <ul>
            <!-- HOME BUTTON -->
            <li>
                <a class="btn-primary" href="./ADhome.php">Home</a>
            </li>
            <!-- SIDE NAV BAR ANCHORS -->
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
    <div class="main close-nav" id="mainDiv">

        <!-- NAV START -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">WellnessWave</a>
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
        <!-- NAV END -->

        <!---------------------------------------------------------->

        <!-- TABLE DIV START -->
        <div class="content">

            <!-- TABLE NAME -->
            <h2>Contact Us</h2>

            <!-- TABLE START -->
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <!-- TABLE HEAD START -->
                        <th>Name</th>
                        <th>Email</th>
                        <th>Rating</th>
                        <th>Comment</th>

                        <th>Delete</th>
                    </tr>
                </thead>
                <!-- TABLE HEAD END -->

                <tbody>
                    <!-- ROWS START-->
                    <?php foreach( $run as $data ) { ?>
    <tr>
        <td><?php echo $data['customer_name'];?></td>
        <td><?php  echo $data['email']; ?></td>
        <td><?php echo $data['rating']; ?></td>
        <td><?php echo $data['comment']; ?></td>
        
                       
                        <td><a href="ADcontactus.php?delete=<?php echo $data['contactus_id'] ; ?> " class="one">Delete</a></td>
                    </tr>
                    <?php } ?>
                    <!-- ROWS END-->

                </tbody>
            </table>
            <!-- TABLE END -->

        </div>
        <!-- TABLE DIV END -->

        <!-------------------------------------------------->

        <!-- MAIN BODY END -->

        <!-- BUTTON TO UP START -->
        <span class="up " id="up">
            <i class="fa-solid fa-up-long"></i>
        </span>
        <!-- BUTTON TO UP START -->




        <!-- JAVA STRAP -->
        <script src="java/bootstrap.bundle.min.js"></script>
        <!-- JAVA MAIN -->
        <script src="java/ADcontactus.js"></script>
</body>

</html>