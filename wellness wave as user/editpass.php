<?php
include("connection.php");

if(isset($_GET['editpass'])){
    $id=1;
    if(isset($_POST['update'])){
        $select=" SELECT * FROM `customer` WHERE `customer_id`=$id";
        $run_select=mysqli_query($connect,$select);

        $fetch=mysqli_fetch_assoc($run_select);

        $fetcholdpass=$fetch['password'];
       if(isset($_POST['update']))
        $oldpass=$_POST['oldpass'];
        $newpass=$_POST['newpass'];
        $cpass=$_POST['cpass'];
        if(password_verify($oldpass,$fetcholdpass)){
            
            if($newpass == $cpass){$newhash=password_hash($newpass,PASSWORD_DEFAULT);
                $update=" UPDATE `customer` SET  `password` = '$newhash' WHERE `customer_id` = $id";
                $run_update= mysqli_query($connect,$update);
                header("location: profile.php");
                
                
            } else{
            echo "new password doesn't match confirm";
        }
    }else{
           echo "old password is wrong";
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
    <!-- CSS LINK -->
    <link rel="stylesheet" href="CSS/ADlog.css">
    <!-- ICONS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <!-- CONTAINER START -->
    <div class="container">

        <!-- LOG IN CARD START -->
        <div class="card">
        <form method="POST">
            <h1> Update Password </h1>
            <!-- PASSWORD START -->
            <div class="box">
                <input type="password"  name="oldpass" placeholder="Enter Your Old Password" required>
                <i class='fa-solid fa-lock'></i>
            </div>
            <!-- PASSWORD END -->

            <!-- PASSWORD START -->
            <div class="box">
                <input type="password" name="newpass" placeholder="Enter Your New Password" required>
                <i class='fa-solid fa-lock'></i>
            </div>
            <!-- PASSWORD END -->
            <!-- PASSWORD START -->
            <div class="box">
                <input type="password" name="cpass" placeholder="Confirm Your New Password" required>
                <i class='fa-solid fa-lock'></i>
            </div>
            <!-- PASSWORD END -->
            <!-- LOGIN BUTTON START -->
            <button type="submit" class="btn" name="update"> Confirm </button>
            <!-- LOGIN BUTTON START -->

            </form>
        </div>
    </div>

</body>

</html>