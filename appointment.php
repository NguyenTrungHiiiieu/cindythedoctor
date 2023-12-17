<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phone_number"];
    $appointmentDate = $_POST["appointment_date"];

   
    $servername = "localhost";
    $username = "root";
    $password = "123";
    $dbname = "phongkham";

    $conn = new mysqli('localhost', 'root', '123', 'phongkham');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO appointments (first_name, last_name, email, phone_number, appointment_date)
            VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$appointmentDate')";

    if ($conn->query($sql) === TRUE) {
       
        header("Location: thank_you.php");
        exit();
    } else {
        echo '<div style="color: red; text-align: center; margin-top: 20px;">Error: ' . $sql . '<br>' . $conn->error . '</div>';
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Appointment</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            color: #333;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #005a8d;
        }

        span {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        .inputBox {
            display: flex;
            margin-bottom: 16px;
        }

        .inputBox input {
            flex: 1;
            padding: 10px;
            margin-right: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .box {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #005a8d;
            color: #fff;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <form method="post" action="">
        <h1>Make Appointment</h1>

        <span>Your Name:</span>
        <div class="inputBox">
            <input type="text" name="first_name" placeholder="First name" required>
            <input type="text" name="last_name" placeholder="Last name" required>
        </div>

        <span>Your Email:</span>
        <input type="email" name="email" placeholder="Enter your email" class="box" required>

        <span>Your Number:</span>
        <input type="number" name="phone_number" placeholder="Enter your number" class="box" required>

        <span>Appointment Date:</span>
        <input type="datetime-local" name="appointment_date" class="box" required>

        <input type="submit" value="Order now">
    </form>

</body>

</html>
