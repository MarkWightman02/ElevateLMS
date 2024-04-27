<?php
// Include the database connection script
require_once 'Scripts/config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try {
        // Prepare and execute the SQL statement to insert the user into the database
        $stmt = $pdo->prepare("INSERT INTO users (username, password_hash) VALUES (?, ?)");
        $stmt->execute([$username, $hashedPassword]);

        // Display success message
        echo "User '$username' added successfully!";
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
	<link rel="stylesheet" href="style/style.css">
    <title>Add User</title>
</head>
<body>
	<div class="container">
		<h2>Add User</h2>
		<form action="<signup.php>" method="post">
			<label for="username">Username</label>
			<input type="text" id="username" name="username" placeholder="Enter username" required><br><br>
			<label for="password">Password</label>
			<input type="password" id="password" name="password" placeholder="Enter password" required><br><br>
			<input type="submit" value="Add User">
		</form>
</body>
</html>
