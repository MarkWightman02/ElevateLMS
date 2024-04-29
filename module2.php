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
            <li><a href="Module2.php">Start Here!</a></li>
            <li><a href="#" id="reading">Reading</a></li>
            <li><a href="#" id="video">Video</a></li>
            <li><a href="#" id="quiz">Quiz</a></li>
        </ul>
    </div>
	
	
	
    <div class="module-container">
        <h1>Module 2: How To Pin</h1> 
    </div>
	
	<div class="content-container">
		<p>To establish and maintain pins in Brazilian Jiu-Jitsu, it's essential to understand the principles of control and weight distribution. Pins serve as foundational techniques for controlling your opponent on the ground, allowing you to transition between positions, set up submissions, and dictate the pace of the match. Proper positioning and pressure are key elements in executing effective pins, as they enable you to immobilize your opponent while conserving energy and maintaining stability</p>
		<p>In addition to control and weight distribution, leverage and timing play crucial roles in pinning techniques. By utilizing leverage, you can maximize the effectiveness of your pinning positions, applying minimal force to achieve maximum control over your opponent. Timing is equally important, as it allows you to capitalize on openings and opportunities to secure and maintain pins throughout the match.</p>
	</div>

	<div class="footer-container">
		<footer>
			<p>&copy; 2024 Elevate Judo and Jiu Jitsu. All rights reserved.</p>
		</footer>
	</div>
	
	
		    <script>
        // Get the elements whose text will be changed
		const moduleContent = document.querySelector('.content-container');


        // Add event listener to the left menu
        document.getElementById('reading').addEventListener('click', function(event) {
            event.preventDefault();
			moduleContent.innerHTML = '';
            // Update text of the elements
            moduleContent.innerHTML = `
			<p>The mount position in Brazilian Jiu-Jitsu is a dominant ground grappling position where one practitioner sits astride their opponent's torso, effectively pinning them to the ground. From the mount, the practitioner has significant control over their opponent's movements, allowing for both offensive and defensive opportunities. By establishing a stable base and distributing their weight effectively, the practitioner can immobilize their opponent while maintaining the ability to transition to various submissions or maintain positional dominance.</p>
			<p>Side control, also known as side mount, is another fundamental position in Brazilian Jiu-Jitsu characterized by the practitioner being perpendicular to their opponent, with one knee close to the opponent's head and the other knee close to their hips. From side control, the practitioner can exert pressure and control over their opponent, limiting their mobility and creating opportunities for attacks. By maintaining a tight grip and distributing their weight strategically, the practitioner can effectively neutralize their opponent's defenses and set up submissions or advance to more dominant positions.</p>
			<p>Kesa Gatame, or scarf hold, is a pinning position in Brazilian Jiu-Jitsu where the practitioner secures their opponent's upper body by wrapping their arm around the opponent's head and under their near arm, while controlling the opponent's far arm with their own. This position allows for tight control over the opponent's upper body, restricting their movement and limiting their options for escape. By applying pressure and maintaining a strong base, the practitioner can effectively immobilize their opponent and transition to submissions or maintain positional dominance.</p>
		    `;
		});
		// Add event listener to the left menu
        document.getElementById('video').addEventListener('click', function(event) {
            event.preventDefault();
			moduleContent.innerHTML = '';
            // Update text of the elements
            moduleContent.innerHTML += '<div class = "video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/kft2AkvKhWU?si=MFhGvh43CZWBBW0L" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
		    moduleContent.innerHTML += '<div class = "video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/nDbHQPBvQvQ?si=oTpZahWODyxBAUXA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
			moduleContent.innerHTML += '<div class = "video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/wcv49O8mQXo?si=RKxEExUX5FZG3f-f" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
        });
		
// Add event listener to the left menu
document.getElementById('quiz').addEventListener('click', function(event) {
    event.preventDefault();
    // Clear previous content
    moduleContent.innerHTML = '';
    // Update text of the elements with the quiz questions
    moduleContent.innerHTML = `
        <ol>
            <li>What is the objective of establishing the mount position in Brazilian Jiu-Jitsu?</li>
            <ul>
                <li><input type="radio" id="q1a" name="q1" value="a"><label for="q1a">To create distance from the opponent</label></li>
                <li><input type="radio" id="q1b" name="q1" value="b"><label for="q1b">To control and immobilize the opponent</label></li>
                <li><input type="radio" id="q1c" name="q1" value="c"><label for="q1c">To increase mobility</label></li>
            </ul>
            <li>What is the primary goal of maintaining side control in Brazilian Jiu-Jitsu?</li>
            <ul>
                <li><input type="radio" id="q2a" name="q2" value="a"><label for="q2a">To create space for submissions</label></li>
                <li><input type="radio" id="q2b" name="q2" value="b"><label for="q2b">To prevent the opponent from escaping</label></li>
                <li><input type="radio" id="q2c" name="q2" value="c"><label for="q2c">To conserve energy</label></li>
            </ul>
            <li>What is the key principle behind Kesa Gatame (Scarf Hold) in Brazilian Jiu-Jitsu?</li>
            <ul>
                <li><input type="radio" id="q3a" name="q3" value="a"><label for="q3a">Maintaining chest-to-chest contact with the opponent</label></li>
                <li><input type="radio" id="q3b" name="q3" value="b"><label for="q3b">Securing a dominant position for striking</label></li>
                <li><input type="radio" id="q3c" name="q3" value="c"><label for="q3c">Creating distance to set up submissions</label></li>
            </ul>
        </ol>
        <button onclick="submitQuiz()">Submit Quiz</button>
    `;
});

//js function to check correct answers
function submitQuiz() {
    // Get the selected answers
    const q1Answer = document.querySelector('input[name="q1"]:checked');
    const q2Answer = document.querySelector('input[name="q2"]:checked');
    const q3Answer = document.querySelector('input[name="q3"]:checked');
    
    // Check if all questions are answered
    if (q1Answer && q2Answer && q3Answer) {
        // Check the answers
        const correctAnswers = ['b', 'b', 'a'];
        const userAnswers = [q1Answer.value, q2Answer.value, q3Answer.value];
        let score = 0;
        for (let i = 0; i < correctAnswers.length; i++) {
            if (userAnswers[i] === correctAnswers[i]) {
                score++;
            }
        }
        // Display feedback to the user
        moduleContent.innerHTML += `<p>Quiz Submitted! Your score: ${score}/${correctAnswers.length}</p>`;
    } else {
        // Prompt user to answer all questions
        moduleContent.innerHTML += '<p>Please answer all questions.</p>';
    }
}

    </script>
</body>

</html>

</body>

</html>
