<?php
 include("afternav.php");

include("connection.php");
$Join_query="SELECT * FROM `doctor` JOIN `category` ON `doctor`.`category_id`=`category`.`category_id` JOIN `doctorcat` ON `doctor`. `doctorcat_id`=`doctorcat`.`doctorcat_id` WHERE `doctor`. `hide` = 1 ";
$run_join=mysqli_query($connect,$Join_query);


if(isset($_POST['submit'] )){ 

$doctorcat=$_POST['doctorcat'];
$Join= " SELECT * FROM `doctor` JOIN `doctorcat` ON `doctor` . `doctorcat_id` = `doctorcat` . `doctorcat_id` JOIN `category` ON `doctor` . `category_id` = `category` . `category_id` WHERE `doctor` . `doctorcat_id` = '$doctorcat' && `doctor`. `hide` = 1  ";
$run_code=mysqli_query($connect,$Join);
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
    <link rel="stylesheet" href="CSS/doc.css">
    <!-- ICONS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <!-- IMAGE DIV START -->
    <div class="image-container">
        <a href="#container">
            <h2>Book An Appointment</h2>
        </a>
    </div>
    <!-- IMAGE DIV START -->

    <!-- DOCTORS CARDS START -->
    <!-- ****************** -->
    <div class="booknow">
        <p>
            Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮
            Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book
            Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮
            Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book
            Now ✮ Book Now ✮ Book Now ✮ Book Now ✮ Book Now
        </p>
    </div>
    <h1 class="Search">
        Search by Specialization
    </h1>

    
    <div class="filter">
        <form action="doc.php" method="POST">

            <label>
                <input type="radio" name="doctorcat" value="1">
                Dermatologist
            </label>

            <label>
                <input type="radio" name="doctorcat" value="2">
                Cardiologist
            </label>
            <label>
                <input type="radio" name="doctorcat" value="3">
                Psychiatrist
            </label>
            <label>
                <input type="radio" name="doctorcat" value="4">
                Radiologist
            </label>
            <label>
                <input type="radio" name="doctorcat" value="5">
                Pediatrician
            </label>
            <label>
                <input type="radio" name="doctorcat" value="6">
                Dentist
            </label>
            <label>
                <input type="radio" name="doctorcat" value="7">
                Surgeon
            </label>
            <label>
                <input type="radio" name="doctorcat" value="8">
                Ophthologist
            </label>
            <div class="btn">
                <button type="submit" name ="submit">SEARCH</button>
            </div>
        </form>
    </div>
        
    
    <div class="container" id="container">
        <?php if (isset($_POST['submit'])) { ?>
           
            <?php foreach ($run_code as $row) { ?>
        <div class="cards">
            <img class="dr" src="./img/<?php echo $row['image'] ?> "  >
            <p class="info"> <?php echo $row['doctor_name'] ?><br>
            <?php echo $row['doctorcat_name'] ?> <br>
            <?php echo $row['visit_fee']?></br>
            

            <button class="bookbtn"><a href = "payment.php?id=<?php echo $row['doctor_id']?>&&cat_id=<?php echo $row['category_id']?>" >Book </a></button>
           
        </div>
    </div>   
        <?php } ?>
        
  <?php } else { ?>
        
          
           
               
            <?php foreach ($run_join as $data) { ?>
                <div class="cards">
                    <img class="dr" src="./img/<?php echo $data['image'] ?>"  > 
                    <p class="info"> <?php echo $data['doctor_name'] ?><br>
                    <?php echo $data['doctorcat_name'] ?> <br>
                    <?php echo $data['visit_fee']?></br>
                    
                   
        
                    <button class="bookbtn"><a href = "payment.php?id=<?php echo $data['doctor_id']?>&&cat_id=<?php echo $data['category_id']?>" >Book </a></button>
                </div>
        
            
           <!-- </div> -->
           <?php } } ?>
    




     </div>
    <!-- first card -->
    </div>

    <!-- JAVA SCRIPT LINK -->
    <script src="java/nav.js"></script>
    <?php include("footer.php"); ?>
</body>

</html>
