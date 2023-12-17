<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Payment</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fff;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .payment-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #0070cc;
        }

        .product-info {
            margin-top: 20px;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #0070cc;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #005499;
        }
    </style>
</head>

<body>

    <div class="payment-form">
        <h1>Online Payment</h1>
        <div class="product-info">
            <select id="product-select">
                <option value="basic">Basic Package - $500/year</option>
                <option value="standard">Standard Package - $800/year</option>
                <option value="premium">Premium Package - $1000/year</option>
            </select>
            <form action="confirm_payment.php" method="post">
        <button type="submit">Pay Now</button>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script src="js/script2.js"></script>
</body>

</html>
