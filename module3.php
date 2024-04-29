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
    
	<nav class="navbar">
        <div class="dropdown">
            <button class="dropbtn">Menu</button>
            <div class="dropdown-content">
				<a href="Home.html">Home</a>
                <a href="Module1.html">Module 1</a>
                <a href="Module2.html">Module 2</a>
                <a href="Module3.html">Module 3</a>
            </div>
        </div>
    </nav>
	
	
	<div class="left-menu">
        <ul>
            <li><a href="Module3.html">Start Here!</a></li>
            <li><a href="">Reading</a></li>
            <li><a href="">Quiz</a></li>
            <li><a href="">Discussion</a></li>
        </ul>
    </div>
	
	
	
    <div class="module-container">
        <h1>Module 3 Name</h1>
        <p>Module 3 Description</p>
    </div>
	
	<div class="content-container">
		<p>Module Content</p>
	</div>

	<div class="footer-container">
		<footer>
			<p>&copy; 2024 Elevate Judo and Jiu Jitsu. All rights reserved.</p>
		</footer>
	</div>
</body>

</html>
