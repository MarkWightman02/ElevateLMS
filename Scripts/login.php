<?php
session_start();
// Include the database connection script
require_once 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username2 = $_POST['username'];
    $password2 = $_POST['password'];

    // Query the database to fetch the user with the provided username
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username2]);
    $user = $stmt->fetch();

    // Check if a user with the provided username exists
    if ($user) {
        // Verify the password
        if (password_verify($password2, $user['password_hash'])) {
            // Password is correct, set up a session
            $_SESSION['username'] = $username2;
            // Redirect to the dashboard or home page
            header("../home.html");
            exit();
        } else {
            // Password is incorrect, display an error message
            echo "Incorrect password. Please try again.";
        }
    } else {
        // User does not exist, display an error message
        echo "User does not exist. Please try again.";
    }
} else {
    // Redirect to the login page if accessed directly without submitting the form
    header("index.html");
    exit();
}
?>
