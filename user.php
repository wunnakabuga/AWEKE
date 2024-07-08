<?php
include 'dbConnection.php';

$username = "newuser";
$email = "newuser@example.com";
$password = password_hash("userpassword", PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);
$stmt->execute();
$stmt->close();
$conn->close();
?>
