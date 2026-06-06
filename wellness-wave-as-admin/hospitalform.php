<?php
include("connection.php");

if (isset($_POST['submit'])) {
   
    $name=$_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $category_id = $_POST['category'];
    $image = $_FILES['image']['name'];
   
    if (empty($name) || empty($phone) || empty($city) || empty($country) || empty($category_id) || empty($address) || empty($image)) {
        echo "Missing inputs";
    } else {
          $insert = "INSERT INTO `hospital` values ( NULL ,'$name','$phone','$address','$country', '$city', '$category_id','$image')";
            $run_insert =mysqli_query($connect,$insert);
            move_uploaded_file($_FILES['image']['tmp_name'], "./img/ ".$image);
     
            if ($run_insert) {
                header("Location:ADhospital.php");
            } else {
                $error = "Error: " . mysqli_error($connect);
            }
        }
    }

    

  $name='';
  $phone="";
  $city="";
  $image="";
  $country="";
  $category_id ="";
  $address="";

$edit=false;

if(isset($_GET['edit'])){
    $edit=true;
    $id=$_GET['edit'];
    $select= "SELECT * FROM `hospital` WHERE `hospital_id` =$id";
    $run_select = mysqli_query($connect,$select);
    $fetch=mysqli_fetch_assoc($run_select);
    $name=$fetch['hospital_name'];
    $phone=$fetch['phone'];
    $city=$fetch['city'];
    $country=$fetch['country'];
    $category_id=$fetch['category_id'];
    $address=$fetch['address'];
    


if(isset($_POST['update'])){
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $city=$_POST['city'];
  $image=$_FILES['image']['name'];
  $country=$_POST['country'];
  $category_id =$_POST['category'];
  $address=$_POST['address'];


if(empty($image)){
    $update="UPDATE `hospital` SET `hospital_name`= '$name' ,  `phone` = '$phone',  `address` = '$address' ,`country` = '$country', `city` ='$city' , `category_id` = '$category_id'   WHERE `hospital_id`=$id";
    $run_update=mysqli_query($connect,$update);
    header("location: ADhospital.php");
}else{
    $update="UPDATE `hospital` SET `hospital_name`= '$name' ,  `phone` = '$phone',  `address` = '$address' ,`country` = '$country', `city` ='$city' , `category_id` = '$category_id' , `image`='$image'   WHERE `hospital_id`=$id";
    $run_update=mysqli_query($connect,$update);
    move_uploaded_file($_FILES['image']['tmp_name']);
    header("location: ADhospital.php");
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
    <link rel="stylesheet" href="CSS/hospitalform.css">

</head>

<body>

    <h1>Hospital form</h1>

    <div class="main-form">
        <form method="POST"  enctype="multipart/form-data">

            <!-- HOSPITAL NAME START -->
            <div>
                <label class="title" for="name">Hospital Name :</label>
                <input type="text" id="name" name='name' placeholder="Enter Hospital name" value="<?php echo $name;?>" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <!-- HOSPITAL NAME END -->

            <!-- PHONE NUMBER START -->
            <div>
                <label class="title" for="phone_number">Phone Number :</label>
                <input type="tel" id="phone_number" name="phone" placeholder="Enter phone number" value="<?php echo $phone;?>" required>
                <i class="fa-solid fa-phone"></i>
            </div>
            <!-- PHONE NUMBER END -->

            <!-- COUNTRY START -->
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
            <!-- COUNTRY END -->

            <!-- CITY START -->
            <div>
                <label class="title" for="city">City :</label>
                <input type="text" id="city" name="city" placeholder="Enter city" value="<?php echo $city;?>">
                <i class="fa-solid fa-globe"></i>
            </div>
            <!-- CITY END -->

            <!-- ADDRESS START -->
            <div>
                <label class="title" for="address">Address :</label>
                <input type="text" id="address" name="address" placeholder="Enter Address"  value="<?php echo $address;?>" required>
                <i class="fa-solid fa-address-book"></i>
            </div>
            <!-- ADDRESS END -->

            <!-- IMAGE START -->
            <div>
                <label for="imgUpload">Upload an image:</label>
                <input class="img" type="file" id="imgUpload" name="image" accept="image/*" value="<?php echo $image;?>">
            </div>
            <!-- IMAGE START -->
            
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

    <!-- JAVA SCRIPT LINK -->
    <script src="java/bootstrap.bundle.min.js"></script>
</body>

</html>