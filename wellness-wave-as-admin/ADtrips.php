<?php
include("connection.php");

$join = "SELECT * FROM `naturalplaces` JOIN `category` ON `naturalplaces`. `category_id`=`category`.`category_id`";
$run_join = mysqli_query($connect, $join);

if(isset($_GET['delete'])){

    $id = $_GET['delete'];
    $delete = "DELETE FROM `naturalplaces` WHERE `n_id` = $id";
    $run_delete = mysqli_query($connect, $delete);
    header("Location: ADtrips.php");
    
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
    <title>Trips</title>
    <!-- WEBSITE LOGO -->
    <link rel="icon" href="./img/LOGOO_cropped.png">
    <!-- ICONS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- CSS LINK -->
    <link rel="stylesheet" href="CSS/ADtrips.css">

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

    <!-- MAIN BODY STARTS -->
    <div class="main close-nav" id="mainDiv">

        <!-- NAV STARTS -->
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
        <!-- NAV ENDS -->

        <!------------------------------------------------------------>

        <!-- TABLE DIV STARTS -->
        <div class="head">

            <!-- TABLE NAME -->
            <h2> medical Trips</h2>

            <!-- TABLE  STARTs -->
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <!-- TABLE HEAD STARTS -->
                        <th>Name</th>
                        <th>description</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Phone</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Trip Date</th>

                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <!-- TABLE HEAD ENDS -->

                <tbody>
                    <!-- ROW START-->
                    <?php 
   
    foreach($run_join as $key) { ?>
    <tr>
      <td><?php echo $key['n_name']; ?></td>
      <td><?php echo $key['description']; ?></td>
      <td><?php echo $key['city']; ?></td>
      <td><?php echo $key['country']; ?></td>
      <td><?php echo $key['phone']; ?></td>
      <td><?php echo $key['category_name']; ?></td>
      <td><?php echo $key['price']; ?></td>
      <td><?php echo $key['trip_dates']; ?></td>
      <td><a href="tripform.php?edit=<?php echo $key['n_id']; ?>">edit</a></td>
      <td><a href="ADtrips.php?delete=<?php echo $key['n_id']; ?>">delete</a></td>
    </tr>
    <?php 
   
    } ?>
                    <!-- ROW ENDS -->

                </tbody>
            </table>
            <!-- TABLE 1 END -->
        </div>
        <!-- TABLE DIV END -->

        <!----------------------------------------------------------->

        <!-- MAIN BODY END -->
         <div class="add">
            <a href="tripform.php"><button>
                Add
            </button></a>
         </div>

        <!-- BUTTON TO UP START -->
        <span class="up " id="up">
            <i class="fa-solid fa-up-long"></i>
        </span>
        <!-- BUTTON TO UP START -->


        <!-- JAVA STRAP -->
        <script src="java/bootstrap.bundle.min.js"></script>
        <!-- JAVA MAIN -->
        <script src="java/ADtrips.js"></script>
</body>

</html>