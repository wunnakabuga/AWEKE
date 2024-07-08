<?php
include 'dbConnection.php';

// Function to set remember me cookie
function setRememberMeCookie($username) {
    $cookie_name = "remember_me";
    $cookie_value = $username;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 30 days
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $remember_me = isset($_POST['remember_me']);

        // Prepare statement to fetch user data
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                // Password is correct, start session
                session_start();
                $_SESSION['username'] = $user['username'];

                // Set remember me cookie if checked
                if ($remember_me) {
                    setRememberMeCookie($username);
                }

                header("Location: index.php");
                exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with this username.";
        }

        $stmt->close();
    } else {
        echo "Username or Password is not set.";
    }
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
