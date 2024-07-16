<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "AWEKE_FARM"; // Replace with your actual database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize input to prevent SQL injection
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // Query to check if the user exists
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        echo "Login successful";
    } else {
        // User does not exist
        echo "Invalid email or password";
    }

    // Close the connection
    $conn->close();
} else {
    echo "Invalid request method";
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif; margin: 0;}
        .container {
            padding: 16px;
            max-width: 500px;
            margin: auto;
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Sign In</h2>
    <form action="login.php" method="post">
    <label for="uname">Username</label>
    <input type="text" id="uname" name="username" required>

    <label for="psw">Password</label>
    <input type="password" id="psw" name="password" required>

    <button type="submit">Sign In</button>
</form>

</div>

</body>
</html>
