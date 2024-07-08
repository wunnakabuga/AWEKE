<?php
include 'dbConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Prepare statement to insert user data
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        // Sign-up successful, start session and redirect to index.php
        session_start();
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
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
        input[type=text], input[type=password], input[type=email] {
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
    <h2>Sign Up</h2>
    <form action="Signup.php" method="post">
        <label for="uname">Username</label>
        <input type="text" id="uname" name="username" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="psw">Password</label>
        <input type="password" id="psw" name="password" required>

        <button type="submit">Sign Up</button>
    </form>
</div>

</body>
</html>
