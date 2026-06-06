<?php
include("connection.php");


$Join_query="SELECT * FROM `doctor` JOIN `doctorcat` ON `doctor` . `doctorcat_id` = `doctorcat` . `doctorcat_id` JOIN `category` ON `doctor` . `category_id` = `category` . `category_id` WHERE `doctor` . `hide` =1";
$run_join = mysqli_query($connect,$Join_query);

$Join_hide="SELECT * FROM `doctor` JOIN `doctorcat` ON `doctor` . `doctorcat_id` = `doctorcat` . `doctorcat_id` JOIN `category` ON `doctor` . `category_id` = `category` . `category_id` WHERE `doctor` . `hide` =0";
$run_hide=mysqli_query($connect,$Join_hide);
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
     $delete_query= " DELETE FROM `doctor` WHERE `doctor_id`=$id";
    $run = mysqli_query($connect , $delete_query);
     header("location:ADdoctors.php");
 }

 if(isset($_GET['hide'])){
    $id=$_GET['hide'];
     $edit_query= " UPDATE `doctor` SET hide=0  WHERE `doctor_id`=$id";
    $run_select = mysqli_query($connect , $edit_query);
     header("location:ADdoctors.php");
 }

 if(isset($_GET['undo'])){
    $id=$_GET['undo'];
     $edit= "UPDATE `doctor` SET hide=1 WHERE `doctor_id` =$id";
    $run_undo = mysqli_query($connect , $edit);
     header("location:ADdoctors.php");
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
    <title>Doctors</title>
    <!-- WEBSITE LOGO -->
    <link rel="icon" href="img/LOGOO_cropped.png">
    <!-- ICONS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- CSS LINK -->
    <link rel="stylesheet" href="CSS/ADdoctors.css">

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

        <!-- TABLES DIV START -->
        <div class="conent">

            <!-- TABLE NAME -->
            <h2>Doctors Data</h2>

            <!-- TABLE STARTS-->
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <!-- TABLE HEAD STARTS -->
                        <th>Name</th>
                        <th>phone</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Category</th>
                        <th>Doctor Category</th>
                        <th>Visit fee</th>
                        <th> Detection Date</th>
                        <th>Edit</th>
                        <th>Hide</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <!-- TABLE HEAD ENDS -->

                <tbody>
                    <!-- ROW START-->
                    <tr>
                    <?php foreach ($run_join as $row) { ?>
                        
             <td><?php echo $row  ['doctor_name'] ?></td>
            <td><?php echo $row  ['phone'] ?></td>
            <td><?php echo $row ['email'] ?></td>  
            <td><?php echo $row  ['gender'] ?></td>
            <td><?php echo $row ['city'] ?></td>
            <td><?php echo $row ['country'] ?></td>
            <td><?php echo $row ['address'] ?></td>
            <td><?php echo $row ['category_name'] ?></td>
            <td><?php echo $row ['doctorcat_name'] ?></td>
            <td><?php echo $row ['visit_fee'] ?></td>
            <td><?php echo $row ['schedule'] ?></td>
            <td><a class="one" href="drform.php?edit=<?php echo $row['doctor_id'] ?>">Edit</a></td>
            <td><a class="two" href="ADdoctors.php?hide=<?php echo $row['doctor_id'] ?>">hide</a></td>
            <td><a class="one" href="ADdoctors.php?delete=<?php echo $row['doctor_id'] ?>">Delete</a></td>
            
                    </tr>
                   
                    <?php } ?>

                    <!-- ROW END-->

                </tbody>
            </table>
            <!-- TABLE ENDs -->

        </div>
        <!-- TABLE DIV END -->

        <!----------------------------------------------------------->

                    <!-- TABLE STARTS-->
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <!-- TABLE HEAD STARTS -->
                        <th>Name</th>
                        <th>phone</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Category</th>
                        <th>Doctor Category</th>
                        <th>Visit fee</th>
                        <th> Detection Date</th>
                        <th>Edit</th>
                        <th>Hide</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <!-- TABLE HEAD ENDS -->

                <tbody>
                    <!-- ROW START-->
                    <tr>
                    <?php 
                    foreach ($run_hide as $data) { ?>
                        
             <td><?php echo $data  ['doctor_name'] ?></td>
            <td><?php echo $data  ['phone'] ?></td>
            <td><?php echo $data ['email'] ?></td>  
            <td><?php echo $data  ['gender'] ?></td>
            <td><?php echo $data ['city'] ?></td>
            <td><?php echo $data ['country'] ?></td>
            <td><?php echo $data ['address'] ?></td>
            <td><?php echo $data ['category_name'] ?></td>
            <td><?php echo $data ['doctorcat_name'] ?></td>
            <td><?php echo $data ['visit_fee'] ?></td>
            <td><?php echo $data ['schedule'] ?></td>
            <td><a class="one" href="drform?edit=<?php echo $data['doctor_id'] ?>">Edit</a></td>
            <td><a  class="two" href="ADdoctors.php?undo=<?php echo $data['doctor_id'] ?>">undo hide</a></td>
            <td><a class="one" href="ADdoctors.php?delete=<?php echo $data['doctor_id'] ?>">Delete</a></td>
            
                    </tr>
                   
                    <?php } ?>
                    

                    <!-- ROW END-->


           
                   
                   

                </tbody>
            </table>
          

        </div>
        

        <!------------------------------------------------------------>
        <div class="add">
        <a href="drform.php"> <button>
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
        <script src="java/ADdoctors.js"></script>
</body>

</html>