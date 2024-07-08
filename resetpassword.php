<?php
include 'dbConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // This block handles form submission
    $token = $_POST['token'];
    $new_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("SELECT * FROM users WHERE reset_token = ?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        $stmt = $conn->prepare("UPDATE users SET password = ?, reset_token = NULL WHERE reset_token = ?");
        $stmt->bind_param("ss", $new_password, $token);
        if ($stmt->execute()) {
            echo "Password has been reset successfully.";
            header("Location: login.php");
            exit();
        } else {
            echo "Failed to reset the password.";
        }
    } else {
        echo "Invalid reset token.";
    }

    $stmt->close();
    $conn->close();
} else {
    // This block displays the form if a reset token is present
    if (isset($_GET['token'])) {
        $token = $_GET['token'];
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
                input[type=password] {
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
            <h2>Reset Password</h2>
            <form action="reset_password.php" method="post">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>" required>
                <label for="psw">New Password</label>
                <input type="password" id="psw" name="password" required>
                <button type="submit">Reset Password</button>
            </form>
        </div>

        </body>
        </html>
        <?php
    } else {
        echo "No reset token provided.";
    }
}
?>
