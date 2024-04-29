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
				<a href="Home.php">Home</a>
                <a href="Module1.php">Module 1</a>
                <a href="Module2.php">Module 2</a>
                <a href="Module3.php">Module 3</a>
            </div>
        </div>
    </nav>
	
	
	<div class="left-menu">
        <ul>
            <li><a href="Module1.php">Start Here!</a></li>
            <li><a href="#" id="reading">Reading</a></li>
            <li><a href="#" id ="quiz">Quiz</a></li>
            <li><a href="#" id="video">Video</a></li>
        </ul>
    </div>
	
	
	
    <div class="module-container">
        <h1>Module 1: The Basic Movements</h1>
    </div>
	
	<div class="content-container">
		<p>At Elevate, we believe in learning the basics first. In this lesson, we will learn about the basic movements:</p>
		<li>Bridging</li>
		<li>Shrimping</li>
		<li>Heisting</li>
		<p> To begin, use the menu on the left side of your screen to select "Reading". After you've finished reading, you may move on to the Quiz and Discussion.
	</div>

	<div class="footer-container">
		<footer>
			<p>&copy; 2024 Elevate Judo and Jiu Jitsu. All rights reserved.</p>
		</footer>
	</div>
	
	    <script>
        // Get the elements whose text will be changed
        const moduleHead = document.getElementById('module-container');
        const moduleContet = document.getElementById('content-container');

        // Add event listener to the left menu
        document.getElementById('reading').addEventListener('click', function(event) {
            event.preventDefault();
            // Update text of the elements
            moduleContent.textContent = 'Reading Content Goes Here';
        });
    </script>
</body>

</html>
