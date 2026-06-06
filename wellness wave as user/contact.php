<?php


include("connection.php");
$customer_id=1;
if (isset($_POST['submit'])){
   

$rating=$_POST['rating'];
$comment=$_POST['comment'];
if(empty($rating) || empty($comment)){
    echo"missing input";
}else{
$insert="INSERT INTO `contact_us` VALUES (NULL,$rating ,'$comment' ,$customer_id)";
$run = mysqli_query($connect,$insert);
header("contact.php");
}

}
include("afternav.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <!-- WEBSITE NAME -->
    <title>contact us </title>
    <!-- WEBSITE LOGO -->
    <link rel="icon" href="img/LOGOO_cropped.png">
    <!-- ICONS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- CSS LINK -->
    <link rel="stylesheet" href="css/contact.css">

</head>

<body>
    <h1>We Love To Hear From You</h1>
    <form class="row g-3" method ="POST">

        <div class="col-12">
            <label for="inputAddress2" class="form-label">Message us now</label>
            <input type="text" class="form-control" id="inputAddress2" name="comment" placeholder="Enter your message here...">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Rate Us!</label>
            <select id="inputState" class="form-select" name ="rating">
                <option selected>Choose...</option>
                <option value ="1">1 out of 10</option>
                <option value ="2" >2 out of 10</option>
                <option value ="3" >3 out of 10</option>
                <option value ="4" >4 out of 10</option>
                <option value ="5" >5 out of 10</option>
                <option value ="6" >6 out of 10</option>
                <option value ="7" >7 out of 10</option>
                <option value ="8" >8 out of 10</option>
                <option value ="9" >9 out of 10</option>
                <option value ="10" >10 out of 10</option>
            </select>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-success" name = "submit">Submit</button>
        </div>
    </form>
</body>

</html>
<?php 
 include("footer.php");

?>