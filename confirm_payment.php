<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
        }

        h1,
        p {
            color: #001f3f;
        }

        .confirm-button,
        .cancel-button {
            padding: 10px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        .confirm-button {
            background-color: #008000;
            color: #fff;
        }

        .cancel-button {
            background-color: #ff0000;
            color: #fff;
        }
    </style>
</head>

<body>
    <h1>Payment Confirmation</h1>
    <p>Are you sure you want to pay for the selected service package?</p>

    <form action="process_payment.php" method="post">
        <button type="submit" name="confirm_payment" class="confirm-button">Confirm</button>
    </form>

    <form action="pay.php" method="get">
        <button type="submit" class="cancel-button">Cancel</button>
    </form>
</body>

</html>
