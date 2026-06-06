<?php

include("connection.php");

$Join_query="SELECT * FROM `medicine` JOIN `medcat` ON `medicine` . `medcat_id` = `medcat` . `medcat_id` JOIN `category` ON `medicine` . `category_id`= `category` . `category_id` WHERE `medicine`.`hide`=1";
$run_join=mysqli_query($connect,$Join_query);

$Join="SELECT * FROM `medicine` JOIN `medcat` ON `medicine` . `medcat_id` = `medcat` . `medcat_id` JOIN `category` ON `medicine` . `category_id`= `category` . `category_id` WHERE `medicine`.`hide`=0";
$run_j=mysqli_query($connect,$Join);
    
 if(isset($_GET['delete'])){
    $id=$_GET['delete'];
     $delete_query= "DELETE FROM `medicine` WHERE `medicine_id` = $id";
     $run_delete = mysqli_query($connect , $delete_query);
     header("location:ADproducts.php");
 }
 if(isset($_GET['hide'])){
    $id=$_GET['hide'];
     $hide_query= " UPDATE `medicine` SET hide =0 WHERE `medicine_id` =$id";
    $run = mysqli_query($connect , $hide_query);
     header("location:ADproducts.php");
 }
 if(isset($_GET['undo'])){
    $id=$_GET['undo'];
     $edit_query= " UPDATE `medicine` SET hide =1 WHERE `medicine_id` =$id";
    $run_hide = mysqli_query($connect , $edit_query);
     header("location:ADproducts.php");
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
    <title>Products</title>
    <!-- WEBSITE LOGO -->
    <link rel="icon" href="img/LOGOO_cropped.png">
    <!-- ICONS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- CSS LINK -->
    <link rel="stylesheet" href="CSS/ADproducts.css">

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
            <h2>Products</h2>

            <!-- TABLE START -->
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <!-- TABLE HEAD START -->
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Category</th>
                        <th>Medicine Category</th>
                        <th>Edit</th>

                        <th>Hide</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <!-- TABLE HEAD END -->

                <tbody>
                    <!-- ROWS START-->
                    <tr>
                    <?php foreach ($run_join as $data) { ?>
                
                    
            
            <td><?php echo $data['medicine_name'] ?></td>
            <td><?php echo $data['description'] ?></td>
            <td><?php echo $data['price'] ?></td>
            <td><?php echo $data['stock'] ?></td>
            <td><?php echo $data['category_name'] ?></td>
            <td><?php echo $data['medcat_name'] ?></td>
            <td><a class="two" href="product form.php?edit=<?php echo $data['medicine_id'] ?>">Edit</a></td>
            <td><a  class="two" href="ADproducts.php?hide=<?php echo $data['medicine_id'] ?>">hide</a></td>
            <td><a class="one" href="ADproducts.php?delete=<?php echo $data['medicine_id'] ?>">Delete</a></td>

                    </tr>
                    <!-- ROWS END-->
                    <?php } ?>
                    
                </tbody>
            </table>
            <!-- TABLE END -->

        </div>
        <!-- TABLE DIV END -->

        <!--------------------------------------------------------------->

        <!-- TABLE DIV START-->
        <div class="content">

            <!-- TABLE 2 START -->
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <!-- TABLE CATEGORIES -->
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Category</th>
                        <th>Medicine Category</th>

                        <th>Edit</th>
                        <th>Hide</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <!-- TABLE HEAD END -->

                <tbody>
                    <!-- ROW START-->
                    <?php foreach ($run_j as $row) { ?>
                    <tr>
                          
            <td><?php echo $row['medicine_name'] ?></td>
            <td><?php echo $row['description'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><?php echo $row['stock'] ?></td>
            <td><?php echo $row['category_name'] ?></td>
            <td><?php echo $row['medcat_name'] ?></td>
                      
                        <td><a href="product form.php?edit=<?php echo $row['medicine_id'] ?>" class="two">Edit</a></td>
                        <td><a href="ADproducts.php?undo=<?php echo $row['medicine_id'] ?>" class="two">UndoHide</a></td>
                        <td><a href="ADproducts.php?delete=<?php echo $row['medicine_id'] ?>" class="one">Delete</a></td>
                    </tr>
                    <?php } ?>
                    <!-- ROW END-->

                </tbody>
            </table>
            <!-- TABLE END -->

        </div>
        <!-- TABLE DIV END -->

        <!-------------------------------------------------->

        <div class="add">
        <a href="product form.php"> <button>
                Add
            </button></a>
        </div>
        <!-- MAIN BODY END -->

        <!-- BUTTON TO UP START -->
        <span class="up " id="up">
            <i class="fa-solid fa-up-long"></i>
        </span>
        <!-- BUTTON TO UP START -->



        <!-- JAVA STRAP -->
        <script src="java/bootstrap.bundle.min.js"></script>
        <!-- JAVA MAIN -->
        <script src="java/ADproducts.js"></script>
</body>

</html>