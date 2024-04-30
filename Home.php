<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to the login page
    header("Location: Index.html");
    exit();
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="Style\style2.css">
</head>
<body>
    </script>
    
	<nav class="navbar">
        <div class="dropdown">
            <button class="dropbtn">Menu</button>
            <div class="dropdown-content">
				<a href="Home.php">Home</a>
                <a href="Module1.php">Module 1</a>
                <a href="Module2.php">Module 2</a>
                <a href="Module3.php">Module 3</a>
            </div>
        </div>
    </nav>
    <div class="module-container" height:50px;>
        <h1>Elevate Institute</h1>
    </div>
	
	<div class="content-container">
		<p>Welcome to Elevate LMS, your comprehensive learning management solution designed to elevate your grappling to new heights.</p>
		<p>For more information about the Dojo or LMS, please navigate to <a href="AboutUs.html">About Us</a>
		<p>To get started with your first lesson, navigate to Module 1 by clicking <a href="Module1.php">here</a></p>
	</div>
	<div class="footer-container">
		<footer>
			<p>&copy; 2024 Elevate Judo and Jiu Jitsu. All rights reserved.</p>
		</footer>
	</div>

</body>

</html>
