<?php
include 'dbConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        $reset_token = bin2hex(random_bytes(50));
        $stmt = $conn->prepare("UPDATE users SET reset_token = ? WHERE email = ?");
        $stmt->bind_param("ss", $reset_token, $email);
        $stmt->execute();

        $reset_link = "http://localhost/AWEKE%20FARM/reset_password.php?token=$reset_token";
        // Send the reset link to the user's email. (Use PHP mail function or any other email sending library)
        echo "A reset link has been sent to your email.";
    } else {
        echo "No user found with that email address.";
    }

    $stmt->close();
    $conn->close();
}
?>
