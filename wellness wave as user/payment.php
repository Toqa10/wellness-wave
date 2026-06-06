r<?php
include("afternav.php");
include("connection.php");

$customer_id = 1;
$id = $_GET['id'];
$cat_id = $_GET['cat_id'];

if (isset($_POST['submit'])) {
    if ($cat_id == 3) {
        $select = "SELECT * FROM `doctor` WHERE `doctor_id` = $id";
        $run_select = mysqli_query($connect, $select);
        $fetch = mysqli_fetch_assoc($run_select);
        $price = $fetch['visit_fee'];
        $payment_id = $_POST['payment_method'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $cardholdername = $_POST['cardholder_name'] ?? '';
        $card_number = $_POST['card_number'] ?? '';
        $CVV = $_POST['cvv'] ?? '';
        $expiry_date = $_POST['expiry_date'] ?? '';

        if (empty($payment_id) || empty($date) || empty($time)) {
            echo "Missing input";
        } elseif ($payment_id == 2 && (empty($cardholdername) || empty($card_number) || empty($CVV) || empty($expiry_date))) {
            echo "Missing input";
        } else {
            $insert = "INSERT INTO `reservation` 
                       VALUES (NULL,$payment_id, $customer_id, $price, '$date', '$time', $id, '$cardholdername', '$card_number', '$CVV', '$expiry_date')";
            $run_insert = mysqli_query($connect, $insert);

            if ($run_insert) {
                echo "Reservation successful";
            } else {
                echo "Error: " . mysqli_error($connect);
            }
        }
    } elseif ($cat_id == 4) {
        $select = "SELECT * FROM `naturalplaces` WHERE `n_id` = $id";
        $run_select = mysqli_query($connect, $select);
        $fetch = mysqli_fetch_assoc($run_select);
        $price = $fetch['price'];
        $payment_id = $_POST['payment_method'];
        $quantity = $_POST['quantity'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $cardholdername = $_POST['cardholder_name'] ?? '';
        $card_number = $_POST['card_number'] ?? '';
        $CVV = $_POST['cvv'] ?? '';
        $expiry_date = $_POST['expiry_date'] ?? '';

        if (empty($payment_id) || empty($date) || empty($time) || empty($quantity)) {
            echo "Missing input";
        } elseif ($payment_id == 2 && (empty($cardholdername) || empty($card_number) || empty($CVV) || empty($expiry_date))) {
            echo "Missing input";
        } else {
            $insert = "INSERT INTO `n_reservation` 
                       VALUES (NULL,$id, $customer_id, $payment_id, '$date', '$time', $price, '$cardholdername', '$card_number', '$CVV', '$expiry_date', $quantity)";
            $run_insert = mysqli_query($connect, $insert);

            
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellness Wave</title>
    <link rel="stylesheet" href="CSS/payment.css">
    <link rel="icon" href="img/LOGOO_cropped.png">
</head>

<body>
    <div class="container">
        <h1>Payment and Reservation Form</h1>
        <form method="POST">
            <fieldset>
                <legend>Payment Method</legend>
                <div class="methods">
                    <label>
                        <input type="radio" name="payment_method" value="1" required>
                        Cash 
                    </label>
                    <label>
                        <input type="radio" name="payment_method" value="2" required>
                        Pay Online
                    </label>
                </div>
            </fieldset>
            <fieldset class="online-payment">
                <legend>Card Details</legend>
                <label for="cardholder_name">Cardholder's Name:</label>
                <input type="text" id="cardholder_name" name="cardholder_name" placeholder="Enter Your name">

                <label for="card_number">Card Number:</label>
                <input type="text" id="card_number" name="card_number" placeholder="Enter card number">

                <label for="expiry_date">Expiry Date (MM/YY):</label>
                <input type="text" id="expiry_date" name="expiry_date" placeholder="Enter expiry date">

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" placeholder="Enter cvv">
            </fieldset>
            <fieldset>
                <legend>Reservation Details</legend>
                <label for="reservation_date">Reservation Date:</label>
                <input type="date" id="reservation_date" name="date" required>

                <label for="reservation_time">Reservation Time:</label>
                <select id="reservation_time" name="time" required>
                    <option value="09:00">09:00 AM</option>
                    <option value="10:00">10:00 AM</option>
                    <option value="11:00">11:00 AM</option>
                    <option value="12:00">12:00 PM</option>
                    <option value="13:00">01:00 PM</option>
                    <option value="14:00">02:00 PM</option>
                    <option value="15:00">03:00 PM</option>
                    <option value="16:00">04:00 PM</option>
                </select>
                <?php if($cat_id == 4) { ?>
                <label for="quantity">Quantity:</label>
                <select id="quantity" name="quantity" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <?php } ?>
            </fieldset>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    <script src="./JAVA/bootstrap.bundle.min.js"></script>

</body>

</html>
<?php 
include("footer.php");
?>
