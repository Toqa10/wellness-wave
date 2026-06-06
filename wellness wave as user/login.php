<?php include("navbef.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- WEBSITE NAME -->
    <title>login</title>
    <!-- WEBSITE LOGO -->
    <link rel="icon" href="Images/logo (2).png">
    <!-- CSS LINK -->
    <link rel="stylesheet" href="CSS/login.css">
    <!-- ICONS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <!-- CONTAINER START -->
    <div class="container">

        <!-- LOG IN CARD START -->
        <div class="card">

            <h1> Login </h1>

            <!-- USERNAME START -->
            <div class="box">
                <input type="text" placeholder="Enter Your Username" required>
                <i class='fa-solid fa-user'></i>
            </div>
            <!-- USERNAME END -->

            <!-- PASSWORD START -->
            <div class="box">
                <input type="password" placeholder=" Enter Your Password" required>
                <i class='fa-solid fa-lock'></i>
            </div>
            <!-- PASSWORD END -->

            <!-- REMEMBER ME CHECKBOX START -->
            <div class="check">
                <label> <input type="checkbox"> Remember me </label>
            </div>
            <!-- REMEMBER ME CHECKBOX END -->

            <!-- LOGIN BUTTON START -->
            <button type="submit" class="btn"> <a href="./home2.php">Login</a> </button>
            <!-- LOGIN BUTTON END -->

            <!-- SIGN UP LINK -->
            <div class="signup">
                <p>Don't have an account?
                    <a href="signup.php">Sign Up </a>
                </p>
                <p>Or continue with
                </p>

                <!-- GOOGLE ICON -->
                <a href=""><i class="fa-brands fa-google"></i></a>

                <!-- FACEBOOK ICON -->
                <a href=""><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
    </div>

</body>

</html>
<?php 
 include("footer2.php");

?>