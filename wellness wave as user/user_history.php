<?php
include("afternav.php");
include('connection.php');
$_GET['id']=1;
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- WEBSITE NAME -->
    <title>Wellness Wave</title>
    <!-- WEBSITE LOGO -->
    <link rel="icon" href="img/LOGOO_cropped.png">
    <!-- ICONS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- CSS LINK -->
    <link rel="stylesheet" href="css/history.css">

</head>

<body>
  

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
<?php 
 include("footer.php");

?>
</html>
