<?php
include("connection.php");


if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $city=$_POST['city'];
  $image=$_FILES['image']['name'];
  $country=$_POST['country'];
  $category_id =$_POST['category'];
  $doctorcat_id=$_POST['dr_category'];
  $visitfee=$_POST['visit_fee'];
  $schedule=$_POST['schedule'];
  $address=$_POST['address'];

 
  if(empty($name) ||empty($phone) || empty($email) || empty($gender) || empty($city) || empty($country) || empty($category_id) || empty($doctorcat_id) || empty($visitfee) || empty($schedule) || empty($address) || empty($image)){
    echo"missing inputs";
  }
else {
  $insert= " INSERT INTO `doctor` VALUES ( NULL ,'$name','$phone','$email','$gender','$city','$country', '1' ,'$category_id','$doctorcat_id', '$visitfee','$schedule','$address','$image')";
  $run=mysqli_query($connect,$insert);
  move_uploaded_file($_FILES['image']['tmp_name'],"img/".$image);
  header ("location: ADdoctors.php ");
  }
  
}






  $name="";
  $phone="";
  $email="";
  $gender="";
  $city="";
  $image="";
  $country="";
  $category_id ="";
  $doctorcat_id="";
  $visitfee="";
  $schedule="";
  $address="";
$edit=false;

if(isset($_GET['edit'])){
    $edit=true;
    $id=$_GET['edit'];
    $select= "SELECT * FROM `doctor` WHERE `doctor_id` =$id";
    $run_select = mysqli_query($connect,$select);
    $fetch=mysqli_fetch_assoc($run_select);
    $name=$fetch['doctor_name'];
    $phone=$fetch['phone'];
    $email=$fetch['email'];
    $gender=$fetch['gender'];
    $city=$fetch['city'];
    $country=$fetch['country'];
    $category_id=$fetch['category_id'];
    $doctorcat_id=$fetch['doctorcat_id'];
    $visitfee=$fetch['visit_fee'];
    $schedule=$fetch['schedule'];
    $address=$fetch['address'];
    


if(isset($_POST['update'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $image=$_FILES['image']['name'];
    $country=$_POST['country'];
    $category_id =$_POST['category'];
    $doctorcat_id=$_POST['dr_category'];
    $visitfee=$_POST['visit_fee'];
    $schedule=$_POST['schedule'];
    $address=$_POST['address'];
  


if(empty($image)){
    $update=" UPDATE `doctor` SET `doctor_name`='$name' ,`phone` = '$phone', `email` = '$email',`gender` = '$gender',`address` = '$address' ,`country` = '$country', `city` ='$city' , `category_id` = $category_id,`doctorcat_id`= $doctorcat_id, `schedule` = $schedule,`visit_fee` ='$visitfee'  WHERE `doctor_id`=$id";
    $run_update=mysqli_query($connect,$update);
    header("location:ADdoctors.php ");
}else{
    $update=" UPDATE `doctor` SET `doctor_name`='$name' ,`phone` = '$phone', `email` = '$email',`gender` = '$gender',`address` = '$address' ,`country` = '$country', `city` ='$city' , `category_id` = $category_id,`doctorcat_id`= $doctorcat_id, `schedule` = $schedule,`visit_fee` ='$visitfee', `image` ='$image'  WHERE `doctor_id`=$id";
    $run_update=mysqli_query($connect,$update);
    $move =  move_uploaded_file($_FILES['image']['tmp_name'] , "./img/".$image);
    header("location:ADdoctors.php");
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
    <link rel="stylesheet" href="CSS/drform.css">
</head>

<body>

    <!-- FORM NAME -->
    <h1>DOCTOR FORM</h1>

    <!-- FORM DIV START -->
    <div class="main-form">
        <form method="POST"  enctype="multipart/form-data">

            <!-- DOCTOR NAME START -->
            <div>
                <label class="title" for="Doctor_name">Doctor Name :</label>
                <input type="text" id="Doctor_name" name="name" placeholder="Enter Doctor name"   value="<?php echo $name;?>" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <!-- DOCTOR NAME START -->

            <!-- EMAIL START -->
            <div>
                <label class="title" for="email">E-mail :</label>
                <input type="email" id="email" name="email" placeholder="Enter E-mail" value="<?php echo $email;?>" required>
                <i class="fa-solid fa-envelope"></i>
            </div>
            <!-- EMAIL END -->

            <!-- PHONE NUMBER START -->
            <div>
                <label class="title" for="phone_number">Phone Number :</label>
                <input type="tel" id="phone_number" name="phone" placeholder="Enter phone number"   value="<?php echo $phone;?>" required>
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
                <input type="text" id="city" name="city" placeholder="Enter city"  value="<?php echo $city;?>">
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

            <!-- DOCTOR NAME START -->
            <div>
                <label class="title" for="dr_category"> Dr Category:</label>
                <select id="dr_category" name="dr_category">
                    <option value="Choose">Choose</option>
                    <option value="1" <?php if($doctorcat_id == '1') echo 'selected'; ?>>Dermatologist</option>
                    <option value="2" <?php if($doctorcat_id == '2') echo 'selected'; ?>>Cardiologist</option>
                    <option value="3" <?php if($doctorcat_id == '3') echo 'selected'; ?>>Psychiatrist</option>
                    <option value="4" <?php if($doctorcat_id == '4') echo 'selected'; ?>>Radiologist</option>
                    <option value="5" <?php if($doctorcat_id == '5') echo 'selected'; ?>>Pediatrician</option>
                    <option value="6" <?php if($doctorcat_id == '6') echo 'selected'; ?>>Dentist</option>
                    <option value="7" <?php if($doctorcat_id == '7') echo 'selected'; ?>>Surgeon</option>
                    <option value="8" <?php if($doctorcat_id == '8') echo 'selected'; ?>>Ophthalmologist</option>
                </select>
            </div>
            <!-- DR CATEGORY START -->

            <!-- RESERVATION DATE START -->
            <div>
                <label class="title" for="Reservation_date">schedule :</label>
                <input type="text" id="Reservation_date" name="schedule" placeholder="Enter Date"  value="<?php echo $schedule;?>" required>
            </div>
            <!-- RESERVATION DATE START -->

            <!-- PRICE START -->
            <div>
                <label class="title" for="visit_fee">visit fee :</label>
                <input type="number" id="visit_fee" name="visit_fee" placeholder="Enter visit fee amount"  value="<?php echo $visitfee;?>" required>
                <i class="fa-solid fa-money-bill"></i>
            </div>
            <!-- PRICE START -->

            <!-- GENDER START -->
            <div>
                <label class="title" for="gender">Gender :</label>
                <div class="radio-group">
                    <label class="lab">
                        <input type="radio" name="gender" value="male" <?php if($gender == 'male') echo 'checked'; ?> required> Male
                    </label>
                    <label class="lab">
                        <input type="radio" name="gender" value="female" <?php if($gender == 'female') echo 'checked'; ?> required> Female
                    </label>
                    <label class="lab">
                        <input type="radio" name="gender" value="Prefer not to say" <?php if($gender == 'Prefer not to say') echo 'checked'; ?> required> Prefer not to say
                    </label>
                </div>
            </div>
            <!-- GENDER END -->

            <!-- IMAGE START -->
            <div>
                <label for="imgUpload">Upload an image:</label>
                <input class="img" type="file" id="imgUpload" name="image" accept="image/*">
            </div>
            <!-- IMAGE START -->

            <!-- CATEGORY START -->
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
            <!-- CATEGORY START -->

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
    <!-- FORM DIV END -->

    <!-- JAVA SCRIPT LINK -->
    <script src="java/bootstrap.bundle.min.js"></script>
</body>

</html>