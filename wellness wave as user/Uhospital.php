<?php
include("afternav.php");
include("connection.php");

// Query to join hospital and category tables
$join = "SELECT * FROM `hospital` JOIN `category` ON `hospital`.`category_id` = `category`.`category_id`";
$run_join = mysqli_query($connect, $join);
if(isset($_POST['submit'])){
    $country=$_POST['city'];
$join_select = "SELECT * FROM `hospital` JOIN `category` ON `hospital`.`category_id` = `category`.`category_id` WHERE `hospital` .`country` ='$country'";
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
    <link rel="icon" href="image/LOGOO_cropped.png">
    <!-- CSS LINK -->
    <link rel="stylesheet" href="./CSS/Hospital.css">
    <!-- ICONS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <!-- NAV BAR START -->

    <!-- navbar ends -->
    <div class="image-container">
        <img src="css/background.jpg" alt="">
    </div>

    <h1 class="Search">
        Search by Country
    </h1>
    <div class="filter">
        <form method ="POST">
            <label>
                <input type="checkbox" name="city" value="Egypt">
                Egypt
            </label>
            <label>
                <input type="checkbox" name="city" value="Qatar">
                Qatar
            </label>
            <label>
                <input type="checkbox" name="city" value="Dubai">
                Dubai
            </label>
            <label>
                <input type="checkbox" name="city" value="Saudi">
                Saudi
            </label>
            <label>
                <input type="checkbox" name="city" value="Morocco">
                Morocco
            </label>
            <label>
                <input type="checkbox" name="city" value="Tunisia">
                Tunisia
            </label>
            <label>
                <input type="checkbox" name="city" value="Algeria">
                Algeria
            </label>
            <label>
                <input type="checkbox" name="city" value="Jordan">
                Jordan
            </label>
            <div class="btn">
                <button type="submit" name="submit">SEARCH</button>
            </div>
        </form>
    </div>

    <div class="container">
    <?php

if(isset($country)) {
    while($data = mysqli_fetch_assoc($run_select)) {
        ?>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <h3><?php echo  $data['hospital_name']; ?></h3>
                    <img class="hospital" src="./img/<?php echo $data['image']; ?>" alt="<?php echo $data['hospital_name']; ?>">
                    <p>Discover Now!</p>
                </div>
                <div class="flip-card-back">
                    <p>Address: <?php echo $data['address']; ?></p>
                    <p class="phone_no">Phone Number: <?php echo $data['phone']; ?></p>
                </div>
            </div>
        </div>
        <?php
    }
} else { 
       while($row = mysqli_fetch_assoc($run_join)) {
        ?>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <h3><?php echo  $row['hospital_name']; ?></h3>
                    <img class="hospital" src="./img/<?php echo $row['image']; ?>" alt="<?php echo $row['hospital_name']; ?>">
                    <p>Discover Now!</p>
                </div>
                <div class="flip-card-back">
                    <p>Address: <?php echo $row['address']; ?></p>
                    <p class="phone_no">Phone Number: <?php echo $row['phone']; ?></p>
                </div>
            </div>
        </div>
    
        <?php
    } } ?>
        
    </div>
</body>

</html>
<?php 
 include("footer.php");

?>