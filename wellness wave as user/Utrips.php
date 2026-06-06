<?php
include("afternav.php");
include("connection.php");


$join = "SELECT * FROM `naturalplaces` JOIN `category` ON `naturalplaces`.`category_id` = `category`.`category_id`";
$run_join = mysqli_query($connect, $join);

if(isset($_POST['submit'])){
    echo "done";
$country=$_POST['category'];
$join_select = "SELECT * FROM `naturalplaces` JOIN `category` ON `naturalplaces`.`category_id` = `category`.`category_id` WHERE `naturalplaces`. `country` ='$country' ";
$run_select = mysqli_query($connect, $join_select);

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- WEBSITE NAME -->
    <title>Wellness Wave</title>
    <!-- WEBSITE LOGO -->
    <link rel="icon" href="img/LOGOO_cropped.png">
    <!-- CSS LINK -->
    <link rel="stylesheet" href="./CSS/trip.css">
    <!-- ICONS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <!-- NAV BAR START -->

    <!-- navbar ends -->
    <div class="image-container">
        <!-- <img src="img/caption (3).jpg" alt=""> -->
    </div>
    <!-- TICKER TAPE -->
    <div class="shopnow">
        <p>
            Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book
            Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now
            ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮
            Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book
            Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book
        </p>
    </div>
    <h1 class="Search">
        Search by Country
    </h1>
    <div class="filter">
        <form method ="POST">

            <label>
                <input type="checkbox" name="category" value="Egypt">
                Egypt
            </label>

            <label>
                <input type="checkbox" name="category" value="Qatar">
                Qatar
            </label>
            <label>
                <input type="checkbox" name="category" value="Dubai">
                Dubai
            </label>
            <label>
                <input type="checkbox" name="category" value="Saudi">
                Saudi
            </label>
            <label>
                <input type="checkbox" name="category" value="Morocco">
                Morocco
            </label>
            <label>
                <input type="checkbox" name="category" value="Tunisia">
                Tunisia
            </label>
            <label>
                <input type="checkbox" name="category" value="Algeria">
                Algeria
            </label>
            <label>
                <input type="checkbox" name="category" value="Jordan">
                Jordan
            </label>
            <div class="btn">
                <button type="submit" name ="submit">SEARCH</button>
            </div>
        </form>
    </div>

    <div class="container">
    <?php

if(isset($country)) {
    while($data = mysqli_fetch_assoc($run_select)) {
        ?>
        <div class="small">
            <div class="card">
                <h2>
                <?php echo  $data['n_name'] .'&nbsp,'.'&nbsp'. $data['country']; ?>
                </h2>
                <img src=" ./img/ <?php echo $data['image']; ?>" alt="<?php echo ($data['n_name'])?>"; >
                <p>
                <?php echo  $data['description']; ?>
                </p>
                <button>
                    <a href="payment.php?id=<?php echo $data['n_id']?>&&cat_id=<?php echo $data['category_id']?>"> Book now</a>
                </button>

            </div>
        </div>
        <?php
    }
} else {  
    
       while($row = mysqli_fetch_assoc($run_join)) {
        ?>
        <div class="small">
            <div class="card">
                <h2>
                <?php echo  $row['n_name'] .'&nbsp,'.'&nbsp'. $row['country']; ?>
                </h2>
                 <img src="./img/<?php echo $row['image']; ?>" alt="<?php echo ($row['n_name'])?>"; >
                <p>
                <?php echo  $row['description']; ?>
                </p>
                <button>
                    <a href="payment.php?id=<?php echo $row['n_id']?>&&cat_id=<?php echo $row['category_id']?>"> Book now</a>
                </button>

            </div>
        </div>

<?php }  ?>
<?php }  ?>


       

    </div>



</body>

</html>
<?php 
 include("footer.php");

?>