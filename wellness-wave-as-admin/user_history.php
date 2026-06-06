<?php
include('connection.php');

if(isset($_GET['id'])) {
    $customer_id = $_GET['id'];
    
    // Query for natural places reservations
    $select1 = "SELECT * FROM n_reservation
                JOIN naturalplaces ON n_reservation.n_id = naturalplaces.n_id
                JOIN payment ON n_reservation.payment_id = payment.payment_id
                WHERE customer_id = $customer_id AND category_id = 4 ";
    $run1 = mysqli_query($connect, $select1);

    // Query for doctor reservations
    $select2 = "SELECT * FROM reservation
                JOIN doctor ON reservation.doctor_id = doctor.doctor_id
                JOIN payment ON reservation.payment_id = payment.payment_id
                WHERE customer_id = $customer_id AND category_id = 3 ";
    $run2 = mysqli_query($connect, $select2);

    // Query for medicine orders
    $select3 = "SELECT * FROM orders
                JOIN medicine ON orders.medicine_id = medicine.medicine_id
                JOIN payment ON orders.payment_id = payment.payment_id
                WHERE customer_id = $customer_id AND category_id = 1 ";
    $run3 = mysqli_query($connect, $select3);
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
    <title>Wellness Wave</title>
    <!-- WEBSITE LOGO -->
    <link rel="icon" href="./img/LOGOO_cropped.png">
    <!-- ICONS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- CSS LINK -->
    <link rel="stylesheet" href="CSS/history.css">

</head>

<body>
    <!-- SIDE NAV START -->
    <div id="sideNav" class="side-nav d-none">
        <ul>
            <li>
                <a class="btn-primary" href="./ADhome.php">Home</a>
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

        <!-- TABLES START -->

        <!-- first table start -->

        <div class="content">

            <h2>Product Details</h2>

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Medecine Name </th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Quantity</th>
                        <th> Payment Name</th>
                        
                    </tr>
                </thead>
                <!-- table head end -->
                <tbody>
                    <!-- first row -->
                    <?php foreach($run3 as $data3){ ?>
                    <tr>
                        <td><?php echo $data3['medicine_name']  ?></td>
                        <td><?php echo $data3['price']  ?></td>
                        <td><?php echo $data3['date']  ?></td>
                        <td><?php echo $data3['time']  ?></td>
                        <td><?php echo $data3['quantity']  ?></td>
                        <td><?php echo $data3['payment_name']  ?> </td>
                        
                    </tr>
<?php } ?>

                </tbody>
            </table>
        </div>
        <!-- first table end -->

        <!-- Second Table -->

        <div class="content">
            <h2>Doctor Details</h2>

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Doctor Name</th>
                        <th>Payment Name</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Time</th>
                       

                    </tr>
                </thead>
                <!-- table head ended -->
                <tbody>
                    <!-- first row -->
                    <?php foreach($run2 as $data2){ ?>

                        <tr>
                        <td><?php echo $data2['doctor_name']  ?></td>
                        <td><?php echo $data2['payment_name']  ?> </td>
                        <td><?php echo $data2['price']  ?></td>
                        <td><?php echo $data2['date']  ?></td>
                        <td><?php echo $data2['time']  ?></td>
                        
                    </tr>
<?php } ?>
                   

                </tbody>
            </table>



        </div>
        <!-- Second Table end -->
        <!-- third table start-->
        <h2>Trips Details</h2>

        <div class="content">

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th> Name</th>
                        <th>Payment Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Price</th>
                        <th> Quantity</th>

                       

                    </tr>
                </thead>
                <tbody>
                    <!-- first row -->
                    <?php foreach($run1 as $data1){ ?>

                    <tr>
                    <td><?php echo $data1['n_name']  ?></td>
                    <td><?php echo $data1['payment_name']  ?> </td>
                    <td><?php echo $data1['date']  ?></td>
                    <td><?php echo $data1['time']  ?></td>
                    <td><?php echo $data1['price']  ?></td>
                    <td><?php echo $data1['quantity']  ?></td>


                    </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>
        <!-- third table end-->
        <!-- TABLES END -->
    </div>
    <!-- MAIN BODY END -->

    <!-- BUTTON TO UP START -->
    <span class="up " id="up">
        <i class="fa-solid fa-up-long"></i>
    </span>
    <!-- BUTTON TO UP END -->


    <!-- JAVA STRAP -->
    <script src="java/bootstrap.bundle.min.js"></script>
    <!-- JAVA MAIN -->
    <script src="java/history.js"></script>
</body>

</html>