<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        a {
            color: #4caf50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <form action="" method="post">
        <h2>Register</h2>

        <?php
       
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            include 'connect.php';

           
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

           
            $check_user = "SELECT * FROM users WHERE username='$username'";
            $result = mysqli_query($conn, $check_user);

            if (mysqli_num_rows($result) > 0) {
                echo "<p class='error'>Username already exists. Please choose another username.</p>";
            } else {
               
                $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
                if (mysqli_query($conn, $sql)) {
                    echo "<p class='success'>Registration successful. <a href='login.php'>Login here</a></p>";
                } else {
                    echo "<p class='error'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                }
            }
        }
        ?>

        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <input type="submit" value="Register">

        <p>Already have an account? <a href="login.php">Login here</a></p>
    </form>

</body>

</html>
