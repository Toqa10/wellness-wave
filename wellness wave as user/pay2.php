<?php


include("connection.php");
$customer_id=1;
$medicine_id=$_GET['medicine_id'];
if(isset($_POST['submit'])){
    if(!empty($_POST['quantity']) && !empty($_POST['payment_id'])){
    $quantity=$_POST['quantity'];
    $select="SELECT * FROM `medicine` WHERE `medicine_id`=$medicine_id";
    $run=mysqli_query($connect,$select);
    $fetch= mysqli_fetch_assoc($run);
$price_med=$fetch['price'];
$stock=$fetch['stock'];
$stock-=$quantity;
$update="UPDATE `medicine` SET `stock`=$stock where `medicine_id`=$medicine_id ";
$run_update=mysqli_query($connect,$update);
$total_price = $price_med*$quantity;
$time = date("h:i:s");
$date = date("d:m:y");
$payment_id =$_POST['payment_id'];
$cardholdername=$_POST['cardholdername'];
$card_number=$_POST['card_number'];
$CVV=$_POST['CVV'];
$expiry_date=$_POST['expiry_date'];
if($payment_id==2)
{
    if(empty($cardholdername) || empty($card_number) || empty($CVV) || empty($expiry_date))
{ echo "Missing input";}
else {
$insert="INSERT INTO `orders` VALUES (NULL,$customer_id,$medicine_id,$total_price,'$date','$time',$quantity,$payment_id,'$cardholdername',$card_number,$CVV,'$expiry_date')";
$run_insert=mysqli_query($connect,$insert);
echo"done";}
}elseif($payment_id==1){
    $insert2="INSERT INTO `orders` VALUES (NULL,$customer_id,$medicine_id,$total_price,'$date','$time',$quantity,$payment_id,NULL,NULL,NULL,NULL)";
$run_insert2=mysqli_query($connect,$insert2);
echo"done";
}
 }
else {
    echo "Missing input";
}
}
include("afternav.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wellness wave </title>
    <link rel="stylesheet" href="CSS/pay2.css">
    <link rel="icon" href="images/LOGOO_cropped.png">
</head>

<body>
    <div class="container">
        <h1>Payment and Reservation Form</h1>
        <form method="POST">
            <fieldset>
                <legend>Payment Method</legend>
                <div class="methods">
                    <label>
                        <input type="radio" name="payment_id" value="1" required>
                        Cash
                    </label>
                    <label>
                        <input type="radio" name="payment_id" value="2" required>
                        Pay Online
                    </label>
                </div>
            </fieldset>
            <fieldset class="online-payment">
                <legend>Card Details</legend>
                <label for="cardholder_name">Cardholder's Name:</label>
                <input type="text" id="cardholder_name" name="cardholdername" placeholder="Enter Your name" >

                <label for="card_number">Card Number:</label>
                <input type="text" id="card_number" name="card_number" placeholder="Enter card number" >

                <label for="expiry_date">Expiry Date (MM/YY):</label>
                <input type="text" id="expiry_date" name="expiry_date" placeholder="Enter expiry date" >

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="CVV" placeholder="Enter cvv">
            </fieldset>
            
            <fieldset>
                <label for="quantity">Quantity:</label>
                <select id="quantity" name="quantity" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </fieldset>
            

            <button type="submit" name ="submit">Submit</button>
        </form>
    </div>
</body>


</html>
<?php 
 include("footer.php");

?>