<?php

include("connection.php");

$error = "";

if(isset($_POST["sign_up"])){
    $name=$_POST["Full_name"];
    $email=$_POST["email"];
    $password=$_POST["Password"];
    $hashpass=password_hash($password,PASSWORD_DEFAULT);
    $phone=$_POST["phone_number"];
    $country=$_POST["country"];
    $city=$_POST["city"];
    $address=$_POST["address"];
    $bdate=$_POST["birth_date"];
    $height=$_POST["height"];
    $weight=$_POST["weight"];
    $gender=$_POST["gender"];
   $confirm_pass=$_POST['confirm_pass'];



    $select= " SELECT * FROM `customer` WHERE `email` = '$email' ";
    $run_select=mysqli_query( $connect, $select);
    $rows=mysqli_num_rows($run_select);

    $uppercase=preg_match('@[A-Z]@', $password);
    $lowercase=preg_match('@[a-z]@', $password);
    $numbers=preg_match('@[0-9]@', $password);
    $character=preg_match('@[^\w]@', $password);

if(empty($name)  OR empty($email) OR empty($password) OR empty($phone)  OR empty($country) OR empty($city) OR empty($address) OR empty($bdate) OR empty($height) OR empty($weight) OR empty($gender)  ){
    $error = "Please fill the form completely.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Invalid email format.";
} elseif (strlen($phone) != 11) {
    $error = "Invalid phone number. Phone number should be exactly 11 digits.";
} elseif ($rows > 0) {
    $error = "Email already taken.";
} elseif (strlen($password) < 8) {
    $error = "The password should have at least 8 characters.";
} elseif (!$uppercase || !$lowercase || !$numbers || !$character) {
    $error = "Password must contain uppercase, lowercase, numbers, and special characters.";
}elseif($confirm_pass != $password){
    $error = "Password and confirm password must be equal.";

}
 else {
    $insert = "INSERT INTO `customer` VALUES ( NULL ,'$name', '$email', '$hashpass', '$phone', '$address', '$city', '$country', '$bdate', '$height', '$weight', '$gender')";
    $run_insert = mysqli_query($connect, $insert);
    header("location:home2.php");
    // header("location:contact.php");

    // if ($run_insert) {
    //     // the header should redirect the customer to home page
    // } else {
    //     $error = "Error: " . mysqli_error($connect);
  
    // }

}

}



    $name='';
    $email='';
    $password='';
    $phone='';
    $country='';
    $city='';
    $address='';
    $bdate='';
    $height='';
    $weight='';
    $gender='';

    $edit=false;
    
if(isset($_GET['edit'])){
    $edit=true;
    $id=$_GET['edit'];
    $select=" SELECT * FROM `customer` WHERE `customer_id`= '$id'";
    $run_select = mysqli_query($connect,$select);
    $fetch=mysqli_fetch_assoc($run_select);
    $name=$fetch["customer_name"];
    $email=$fetch["email"];
    $phone=$fetch["phone"];
    $country=$fetch["country"];
    $city=$fetch["city"];
    $address=$fetch["address"];
    $bdate=$fetch["birthday_date"];
    $height=$fetch["height"];
    $weight=$fetch["weight"];
    $gender=$fetch["gender"];
    


if(isset($_POST['update'])){
    $name=$_POST["Full_name"];
    $email=$_POST["email"];
    $phone=$_POST["phone_number"];
    $country=$_POST["country"];
    $city=$_POST["city"];
    $address=$_POST["address"];
    $bdate=$_POST["birth_date"];
    $height=$_POST["height"];
    $weight=$_POST["weight"];
    $gender=$_POST["gender"];


    $update="UPDATE `customer` SET `customer_name`= '$name' , `email`='$email', `password`='$password' , `phone` = '$phone',  `address` = '$address' ,`country` = '$country', `city` ='$city' , `birthday_date` = '$bdate' , `height` ='$height', `weight` ='$weight', `gender` ='$gender'   WHERE `customer_id`=$id";
    $run_update=mysqli_query($connect,$update);
    if ($run_update) {
        header("location:profile.php ");
    } else {
        $error = "Error: " . mysqli_error($connect);
    }
}
}
include("afternav.php");
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- WEBSITE NAME -->
    <title>Wellness Wave</title>
    <!-- WEBSITE LOGO -->
    <link rel="icon" href="Images/logo (2).png">
    <!-- CSS LINK -->
    <link rel="stylesheet" href="CSS/signup.css">
    <!-- ICONS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

    <!-- FORM START -->

    <div class="sign">
        <form method="POST">

        <?php if (!empty($error)) { ?>

                <?php echo $error; ?>
            <?php } ?>
            <!-- FUll NAME START -->
            <div>
                <label class="title" for="Full_name">Full Name :</label>
                <input type="text" id="Full_name" name="Full_name" placeholder="Enter your full name" value="<?php echo $name;?>" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <!-- FULL NAME END -->

            <!-- EMAIL START -->
            <div>
                <label class="title" for="email">E-mail :</label>
                <input type="email" id="email" name="email" placeholder="Enter your E-mail" value="<?php echo $email;?>" required>
                <i class="fa-solid fa-envelope"></i>
            </div>
            <!-- EMAIL END -->

            <!-- PHONE NUMBER START -->
            <div>
                <label class="title" for="phone_number">Phone Number :</label>
                <input type="tel" id="phone_number" name="phone_number" placeholder="Enter your phone number" value="<?php echo $phone;?>" required>
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
                <input type="text" id="city" name="city" placeholder="Enter your city" value="<?php echo $city;?>">
                <i class="fa-solid fa-globe"></i>
            </div>
            <!-- CITY END -->

            <!-- ADDRESS START -->
            <div>
                <label class="title" for="address">Address :</label>
                <input type="text" id="address" name="address" placeholder="Enter your Address" value="<?php echo $address;?>" required>
                <i class="fa-solid fa-address-book"></i>
            </div>
            <!-- ADDRESS END -->

            <!-- BIRTH DATE START -->
            <div>
                <label class="title" for="birth_date">Birth Date :</label>
                <input type="date" id="birth_date" name="birth_date"  value="<?php echo $bdate;?>" required>
            </div>
            <!-- BIRTH DATE END -->

            <!-- HEIGHT AND WEIGHT START -->
            <div class="test">

                <!-- HEIGHT START -->
                <div>
                    <label class="title" for="height">Height (cm) :</label>
                    <input type="number" id="height" name="height" placeholder="Your Height in cm" value="<?php echo $height;?>" required>
                    <i class="fa-solid fa-person"></i>
                </div>
                <!-- HEIGHT END -->

                <!-- WEIGHT START -->
                <div class="space">
                    <label class="lab" for="weight">Weight (kg) :</label>
                    <input type="number" id="weight" name="weight" placeholder="Your weight in kg" value="<?php echo $weight;?>" required>
                    <i class="fa-solid fa-person"></i>
                </div>
                <!-- WEIGHT END -->
            </div>
            <!-- HEIGHT AND WEIGHT END -->

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

            <!-- PASSWORD START -->
            <?php if($edit!= true) { ?>
            <div>
                <label class="title" for="Password">Password :</label>
                <input type="password" id="Password" name="Password" placeholder="Enter you Password" required>
                <i class="fa-solid fa-lock"></i>
            </div>
            <div>
                <label class="title" for="Password">confirm Password :</label>
                <input type="password" id="Password" name="confirm_pass" placeholder="Enter you Password" required>
                <i class="fa-solid fa-lock"></i>
            </div>
            <?php } else{}?>
            <!-- PASSWORD END -->

            <!-- TERMS AND CONDITIONS START -->
            <div>
                <label class="lab">
                    <input type="checkbox" name="terms" required>
                    I agree to the <a class="last" href="./terms.php" target="_blank">terms and
                        conditions</a>.
                </label>
            </div>
            <!-- TERMS AND CONDITIONS END -->
            <?php if($edit != true) { ?>
             <!-- SIGN UP BUTTON START -->
             <div class="btn">
                <button type="submit" name="sign_up">Sign Up</button>
            </div>
            <!-- SIGN UP BUTTON END -->
            <?php } else{ ?>
                <div class="btn">
                <button type="submit" name="update">update</button>
            </div>
            <?php } ?>
            

            <!-- LOGIN LINK -->
            <p class="login-link">
                Already have an account? <a class="last" href="login.php">Login</a>
            </p>
        </form>
    </div>
    <!-- FORM END -->

    <?php 
 include("footer.php");

?>
      
</body>

</html>
