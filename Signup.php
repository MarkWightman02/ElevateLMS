<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize username, password, full name, and email from the form
    $username2 = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password2 = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $fullName = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    // Include the database connection script
    require_once 'Scripts/config.php';

    // Hash the password
    $hashedPassword = password_hash($password2, PASSWORD_DEFAULT);

    try {
        // Prepare and execute the SQL statement to insert the user into the database
        $stmt = $pdo->prepare("INSERT INTO users (username, password_hash, full_name, email) VALUES (?, ?, ?, ?)");
        $stmt->execute([$username2, $hashedPassword, $fullName, $email]);

        header("Location: Index.html");
    } catch (PDOException $e) {
        // Display error message
        echo "Error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style.css">
    <title>Sign Up</title>
</head>
<body>
<div class="container">
    <h2>Sign Up</h2>
    <form action="Signup.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter username" required><br><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter password" required><br><br>
        <label for="full_name">Full Name</label>
        <input type="text" id="full_name" name="full_name" placeholder="Enter full name" required><br><br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter email" required><br><br>
        <input type="submit" value="Sign Up">
    </form>
</div>
</body>
</html>