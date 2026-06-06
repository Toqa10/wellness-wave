<?php
include("connection.php");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $stock=$_POST['stock'];
    $category_id =$_POST['category_id'];
    $medcat_id=$_POST['medcat_id'];
    $image=$_FILES['image']['name'];

    if(empty($name) ||empty($description)  || empty($price) || empty($stock) ||  empty($category_id) || empty($medcat_id) || empty($image) ){
        echo"missing inputs";
      }
    else {

    $insert= " INSERT INTO `medicine` VALUES (NULL,'$name','$description','$price','$stock','$category_id','1','$medcat_id','$image')";
    $run=mysqli_query($connect,$insert);
    move_uploaded_file($_FILES['image']['tmp_name'],"img/".$image);
    header ("location:ADproducts.php");
    }
    
}



    $name='';
    $description='';
    $price='';
    $stock='';
    $category_id ='';
    $medcat_id='';
    $image='';

$edit=false;

if(isset($_GET['edit'])){
    $edit=true;
    $id=$_GET['edit'];
    $select= "SELECT * FROM `medicine` WHERE `medicine_id` =$id";
    $run_select = mysqli_query($connect,$select);
    $fetch=mysqli_fetch_assoc($run_select);
    $name=$fetch['medicine_name'];
    $description=$fetch['description'];
    $price=$fetch['price'];
    $stock=$fetch['stock'];
    $category_id =$fetch['category_id'];
    $medcat_id=$fetch['medcat_id'];

    


if(isset($_POST['update'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $stock=$_POST['stock'];
    $category_id =$_POST['category_id'];
    $medcat_id=$_POST['medcat_id'];
    $image=$_FILES['image']['name'];


if(empty($image)){
    $update="UPDATE `medicine` SET `medicine_name`= '$name' ,  `description` = '$description',  `price` = '$price' ,`stock` = '$stock', `medcat_id` ='$medcat_id' , `category_id` = '$category_id'   WHERE `medicine_id` =$id";
    $run_update=mysqli_query($connect,$update);
    header("location: ADproducts.php");
}else{
    $update="UPDATE `medicine` SET `medicine_name`= '$name' ,  `description` = '$description',  `price` = '$price' ,`stock` = '$stock', `medcat_id` ='$medcat_id' , `category_id` = '$category_id', `image`='$image'    WHERE `medicine_id`=$id";
    $run_update=mysqli_query($connect,$update);
    move_uploaded_file($_FILES['image']['tmp_name']);
    header("location: ADproducts.php");
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
    <link rel="stylesheet" href="CSS/prtform.css">

</head>

<body>

    <h1>PRODUCT FORM</h1>

    <div class="main-form">
        <form method="POST"  enctype="multipart/form-data">

            <div>
                <label class="title" for="Medicine_name">Medicine Name :</label>
                <input type="text" id="Medicine_name" name="name" placeholder="Enter Medicine name"  value="<?php echo $name;?>" required>
                <i class="fa-solid fa-user"></i>
            </div>

            <div>
                <label class="title" for="description">Medicine description :</label>
                <input type="text" id="description" name="description" placeholder="Enter description "  value="<?php echo $description;?>" required>
                <i class="fa-solid fa-capsules"></i>
            </div>

            <div>
                <label class="title" for="Price">Price :</label>
                <input type="number" id="Price" name="price" placeholder="Enter Price"  value="<?php echo $price?>" required>
                <i class="fa-solid fa-money-bill"></i>
            </div>
            <div>
                <label class="title" for="stock">Stock :</label>
                <input type="number" id="stock" name="stock" placeholder="Enter stock"   value="<?php echo $stock;?>" required>
                <i class="fa-solid fa-cubes-stacked"></i>
            </div>


            <div>
                <label class="title" for="Category">Category :</label>
                <select id="category" name="medcat_id" required>
                    <option value="Choose" >Choose</option>
                    <option value="1" <?php if($medcat_id == '1') echo 'selected';?>>PainKiller</option>
                    <option value="2" <?php if($medcat_id == '2') echo 'selected';?>>Heart</option>
                    <option value="3" <?php if($medcat_id == '3') echo 'selected';?>>Skin</option>
                    <option value="4" <?php if($medcat_id == '4') echo 'selected';?>>Supplements</option>
                    <option value="5" <?php if($medcat_id == '5') echo 'selected';?>>Vitamin</option>
                </select>
            </div>

            <div>
                <label for="imgUpload">Upload an image:</label>
                <input class="img" type="file" id="imgUpload" name="image" accept="image/*">
            </div>
            <div>
            <label class="title" for="Category" >Category :</label>
                <select id="category" name="category_id"   value="<?php echo $category_id;?>" required>
                    <option value="Choose">Choose</option>
                    <option value="1"  <?php if($category_id == '1') echo 'selected'; ?> >medicine</option>
                    <option value="2" <?php if($category_id == '2') echo 'selected'; ?> >Hospital</option>
                    <option value="3" <?php if($category_id == '3') echo 'selected'; ?> >doctor</option>
                    <option value="4" <?php if($category_id == '4') echo 'selected'; ?> >Natural healing places</option>
                
                </select>
        
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