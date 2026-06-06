
<?php
include("connection.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $category_id = $_POST['category'];
    $phone = $_POST['phone'];
    $price = $_POST['Price'];
    $trip_dates = $_POST['trip_dates'];
    $image=$_FILES['image']['name'];
   
    if (empty($name) || empty($phone) || empty($city) || empty($price)  || empty($trip_dates) || empty($country) || empty($category_id) || empty($description) || empty($image)) {
        echo "Missing inputs";
    } else {
          $insert = "INSERT INTO `naturalplaces` values ( NULL ,'$name', '$description', '$city' ,'$country', '$category_id','$phone', '$price', '$trip_dates', '$image')";
            $run_insert =mysqli_query($connect,$insert);
            move_uploaded_file($_FILES['image']['tmp_name'], "./img/ ".$image);
     
            if ($run_insert) {
                header("Location:ADtrips.php");
            } else {
                $error = "Error: " . mysqli_error($connect);
            }
        }
    }

  $name="";
  $phone="";
  $city="";
  $image="";
  $country="";
  $category_id ="";
  $description="";
  $price = '';
  $trip_dates = '';
$edit=false;

if(isset($_GET['edit'])){
    $edit=true;
    $id=$_GET['edit'];
    $select= "SELECT * FROM `naturalplaces` WHERE `n_id` =$id";
    $run_select = mysqli_query($connect,$select);
    $fetch=mysqli_fetch_assoc($run_select);
    $name = $fetch["n_name"];
    $description = $fetch['description'];
    $city = $fetch['city'];
    $country = $fetch['country'];
    $category_id= $fetch['category_id'];
    $phone = $fetch['phone'];
    $price = $fetch['price'];
    $trip_dates = $fetch['trip_dates'];

    


if(isset($_POST['update'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $category_id = $_POST['category'];
    $phone = $_POST['phone'];
    $price = $_POST['Price'];
    $trip_dates = $_POST['trip_dates'];
    


if(empty($image)){
    $update=" UPDATE `naturalplaces` SET `n_name`='$name', `phone` = '$phone', `city` ='$city' ,`country` = '$country',  `category_id` = '$category_id',  `description` = '$description', `price` ='$price' , `trip_dates` = '$trip_dates'  WHERE `n_id`=$id";
    $run_update=mysqli_query($connect,$update);
    header("location:ADtrips.php");
}else{
    $update=" UPDATE `naturalplaces` SET `n_name`='$name', `phone` = '$phone', `city` ='$city' ,`country` = '$country',  `category_id` = '$category_id',  `description` = '$description', `price` ='$price' , `trip_dates` = '$trip_dates' ,`image` = '$image' WHERE `n_id`=$id";
    $run_update=mysqli_query($connect,$update);
    move_uploaded_file($_FILES['image']['tmp_name']);
    header("location: ADtrips.php");
}
}
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
    <!-- ICONS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- CSS LINK -->
    <link rel="stylesheet" href="CSS/tripform.css">

</head>

<body>

    <h1>TRIP FORM</h1>

    <div class="main-form">
        <form method="POST"  enctype="multipart/form-data">

            <div>
                <label class="title" for="place_name"> Place name :</label>
                <input type="text" id="place_name" name='name' placeholder="Enter Place name"   value="<?php echo $name;?>" required>
                <i class="fa-solid fa-plane"></i>
            </div>


            <!-- PHONE NUMBER START -->
            <div>
                <label class="title" for="phone_number">Phone Number :</label>
                <input type="tel" id="phone_number" name="phone" placeholder="Enter phone number"  value="<?php echo $phone;?>" required>
                <i class="fa-solid fa-phone"></i>
            </div>
            <!-- PHONE NUMBER END -->
            <div>
                <label class="title" for="Country">Country :</label>
                <select id="Country" name="country"  value="<?php echo $country;?>" required>
                    <option value="">Select</option>
                    <option value="Egypt" <?php if($country == 'Egypt') echo 'selected'; ?>>Egypt</option>
                    <option value="Saudi arabia" <?php if($country == 'Saudi arabia') echo 'selected'; ?>>Saudi arabia</option>
                    <option value="Qatar" <?php if($country == 'Qatar') echo 'selected'; ?>>Qatar</option>
                    <option value="Tunisia" <?php if($country == 'Tunisia') echo 'selected'; ?>>Tunisia</option>
                    <option value="Morocco" <?php if($country == 'Morocco') echo 'selected'; ?>>Morocco</option>
                    <option value="Kuwait" <?php if($country == 'Kuwait') echo 'selected'; ?>>Kuwait</option>
                    <option value="Lebanon" <?php if($country == 'Lebanon') echo 'selected'; ?>>Lebanon </option>
                    <option value="Algeria" <?php if($country == 'Algeria') echo 'selected'; ?>>Algeria</option>
                </select>
            </div>
            <!-- CITY START -->
            <div>
                <label class="title" for="city">City :</label>
                <input type="text" id="city" name="city" placeholder="Enter city"  value="<?php echo $city;?>">
                <i class="fa-solid fa-globe"></i>
            </div>
            <!-- CITY END -->

            <!-- ADDRESS START -->
            <div>
                <label class="title" for="description">description :</label>
                <input type="text" id="description" name="description" placeholder="Enter description"  value="<?php echo $description;?>" required>
                <i class="fa-solid fa-address-book"></i>
            </div>
            <div>
                <label class="title" for="Price">Price :</label>
                <input type="number" id="Price" name="Price" placeholder="Enter Price"  value="<?php echo $price;?>" required>
                <i class="fa-solid fa-money-bill"></i>
            </div>

            <div>
                <label class="title" for="Reservation_date">trip Date :</label>
                <input type="text" id="Reservation_date" name="trip_dates" placeholder="Enter Date"  value="<?php echo $trip_dates;?>" required>
            </div>

            <!-- CATEGORY START-->
            <div>
            <label class="title" for="Category" >Category :</label>
                <select id="category" name="category"   value="<?php echo $category_id;?>" required>
                    <option value="Choose">Choose</option>
                    <option value="1"  <?php if($category_id == '1') echo 'selected'; ?> >medicine</option>
                    <option value="2" <?php if($category_id == '2') echo 'selected'; ?> >Hospital</option>
                    <option value="3" <?php if($category_id == '3') echo 'selected'; ?> >doctor</option>
                    <option value="4" <?php if($category_id == '4') echo 'selected'; ?> >Natural healing places</option>
                
                </select>
            </div>
            <!-- CATEGORY END-->
            <div>
                <label for="imgUpload">Upload an image:</label>
                <input class="img" type="file" id="imgUpload" name="image" accept="image/*">
            </div>


            <?php if($edit != true) { ?>
            <!--  ADD BUTTON -->
            <div class="btn">
                <button type="submit" name="submit">ADD</button>
            </div>
            <?php } else{ ?>
                <div class="btn">
                <button type="submit" name="update">update</button>
            </div>
            <?php } ?>
        </form>
    </div>


    <script src="java/bootstrap.bundle.min.js"></script>
</body>

</html>