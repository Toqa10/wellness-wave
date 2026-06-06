<?php 
include("afternav.php");
include("connection.php");
$customer_id=1;
$Join_query="SELECT*FROM `customer` WHERE`customer_id`=$customer_id";
$run_join=mysqli_query($connect,$Join_query);
$fetch=mysqli_fetch_assoc($run_join);

$customer_name=$fetch['customer_name'];
$email=$fetch['email']; 
$password=$fetch['password'];
$phone=$fetch['phone'];
$address=$fetch['address'];
$city=$fetch['city'];
$country=$fetch ['country'];
$birthday_date=$fetch['birthday_date'];
$height=$fetch['height'];
$weight=$fetch['weight'];
$gender=$fetch['gender'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user profile </title>
    
</head>
<body>

<h1>Customer Details</h1>
<br><br>
<p><strong>Name:</strong> <?php echo ($customer_name); ?></p>
    <p><strong>Email:</strong> <?php echo ($email); ?></p>
    <p><strong>Phone:</strong> <?php echo ($phone); ?></p>
    <p><strong>Address:</strong> <?php echo ($address); ?></p>
    <p><strong>City:</strong> <?php echo ($city); ?></p>
    <p><strong>Country:</strong> <?php echo ($country); ?></p>
    <p><strong>Birthday Date:</strong> <?php echo ($birthday_date); ?></p>
    <p><strong>Height:</strong> <?php echo ($height); ?></p>
    <p><strong>Weight:</strong> <?php echo ($weight); ?></p>
    <p><strong>Gender:</strong> <?php echo ($gender); ?></p> 
    <a href="signup.php?edit=1">Edit</a></td>
    <a href="editpass.php?editpass=1">Edit password</a></td>
      
</body>
</html>
<?php 
 include("footer.php");

?>