<?php

header("Location: thank_you2.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Process</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>

<body>

    <div class="payment-container">
        <h2>Payment Details</h2>

        <form action="process_payment.php" method="post">
            

            <div class="form-group">
                <label for="package">Select Package:</label>
                <select name="package" id="package">
                    <option value="basic">Basic Package</option>
                    <option value="standard">Standard Package</option>
                    <option value="premium">Premium Package</option>
                </select>
            </div>

            <div class="form-group">
                <label for="customer_name">Your Name:</label>
                <input type="text" name="customer_name" id="customer_name" required>
            </div>

            <div class="form-group">
                <label for="customer_email">Your Email:</label>
                <input type="email" name="customer_email" id="customer_email" required>
            </div>

            

            <div class="form-group">
                <button type="submit">Confirm Payment</button>
            </div>
        </form>
    </div>

</body>

</html>
