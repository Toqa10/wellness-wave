<?php
include("connection.php");
 include("afternav.php");

$Join_query="SELECT * FROM `medicine`JOIN `medcat` ON `medicine`.`medcat_id`=`medcat`.`medcat_id` JOIN `category` ON `medicine`.`category_id`=`category`.`category_id` WHERE `medicine`. `hide` = 1   ";
$run_join=mysqli_query($connect,$Join_query);



if(isset($_POST['submit'] )){ 

  $medcat=$_POST['category'];
  $Join="SELECT * FROM `medicine`JOIN `medcat` ON `medicine`.`medcat_id`=`medcat`.`medcat_id` JOIN `category` ON `medicine`.`category_id`=`category`.`category_id` WHERE `medicine`.`medcat_id` =$medcat && `medicine`. `hide` = 1 ";
  $run_code=mysqli_query($connect,$Join);
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- WEBSITE NAME -->
  <title>Wellness Wave</title>
  <!-- WEBSITE LOGO -->
  <link rel="icon" href="img/LOGOO_cropped.png" />
  <!-- CSS LINK -->
  <link rel="stylesheet" href="./CSS/pharmacy.css" />
  <!-- ICONS LINK -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
  <!-- NAV BAR START -->
  <!----------------------- NAV BAR END---------------------------- -->

  <!-- BACKGROUND IMAGE START -->
  <div class="image-container">
    <img src="img/Screenshot (242).png" />
  </div>
  <!-- BACKGROUND IMAGE END -->

  <!-- PHARMACY CARDS START -->
  <!-- **************************************************** -->

  <!-- TICKER TAPE -->
  <div class="shopnow">
    <p>
      Now ✮ Shop Now ✮ Shop Now ✮ Shop Now ✮ Shop Now ✮ Shop Now ✮ Shop
      Now ✮ Shop Now ✮ Shop Now ✮ Shop Now ✮ Shop Now ✮ Shop Now ✮ Shop Now
      ✮ Shop Now ✮ Shop Now ✮ Shop Now ✮ Shop Now ✮ Shop Now ✮ Shop Now ✮
      Shop Now ✮ Shop Now ✮ Shop Now ✮ Shop Now ✮ Shop Now ✮ Shop Now ✮ Shop
      Now ✮ Shop Now ✮ Shop Now ✮ Shop Now ✮ Shop
    </p>
  </div>

  <!-- SEARCH BY COUNTRY START -->
  <h1 class="Search">
    Shop by Category
  </h1>
  <div class="filter">
    <form method ="POST">
      <label>
        <input type="radio" name="category" value="1">
        Skin
      </label>

      <label>
        <input type="radio" name="category" value="2">
        Vitamin
      </label>
      <label>
        <input type="radio" name="category" value="3">
        Heart
      </label>
      <label>
        <input type="radio" name="category" value="4">
        Supplements
      </label>
      <label>
        <input type="radio" name="category" value="5">
        Painkiller
      </label>
      <div class="btn">
        <button type="submit" name ="submit">SEARCH</button>
      </div>
    </form>
  </div>
  <!-- SEARCH BY COUNTRY END -->

  <!-- PHARMACY CARDS START -->
  <!--------------------------CARD 1-------------------------->
  <?php if (isset($_POST['submit'])) { ?>
    
    <?php foreach ($run_code as $row) { ?>  
<div class="container" id="container">
    <!-- first card -->
    <div class="cards">
        <img class="dr" src="./img/<?php echo $row['image'] ?>"  >
        <p class="info"> <?php echo $row['medicine_name'] ?><br>
        
        <?php echo $row['price']?></br>

        <button class="buybtn"><a href = "pay2.php?medicine_id=<?php echo $row['medicine_id']?>" >Buy Now </a></button>
    </div>
    </div>
    <?php } ?>
    
    <?php } else { ?>
      <div class="container" id="container">
  <?php foreach ($run_join as $data) { ?>  
    <!-- first card -->
    <div class="cards">
        <img class="dr" src="./img/<?php echo $data['image'] ?>"  >
        <p class="info"> <?php echo $data['medicine_name'] ?><br>
      
        <?php echo $data['price']?></br>
        
        <button class="buybtn"><a href = "pay2.php?medicine_id=<?php echo $data['medicine_id']?>" >Buy Now </a></button>
    </div>
    <?php }?>
    </div>
    <?php }?>
  
  <!-- PHARMACY CARDS START -->


  <!-- JAVA LINK -->
  <script src="JAVA/nav.js"></script>
</body>

</html>
<?php 
 include("footer.php");

?>