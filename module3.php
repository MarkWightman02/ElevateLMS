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
            <li><a href="Module3.php">Start Here!</a></li>
            <li><a href="#" id="reading">Reading</a></li>
            <li><a href="#" id="video">Video</a></li>
            <li><a href="#" id="quiz">Quiz</a></li>
        </ul>
    </div>
	
	
	
    <div class="module-container">
        <h1>Module 3: Escaping Pins</h1>
        
    </div>
	
	<div class="content-container">
		<p>In Brazilian Jiu-Jitsu, mastering pin escapes is crucial for maintaining control and avoiding submission. Pin escapes involve a combination of technique, timing, and leverage to create space and regain a favorable position. Whether trapped in mount, side control, or Kesa Gatame, the goal remains consistent: to disrupt the opponent's balance, create openings, and execute a controlled movement to escape the pin. Understanding the nuances of each pin position and employing the appropriate escape techniques is essential for survival and progression in Brazilian Jiu-Jitsu. Through consistent practice and strategic application, practitioners can develop the skill and confidence to effectively escape from various pinning situations, turning defense into opportunity on the mat.</p>
	</div>

	<div class="footer-container">
		<footer>
			<p>&copy; 2024 Elevate Judo and Jiu Jitsu. All rights reserved.</p>
		</footer>
		
				    <script>
        // Get the elements whose text will be changed
		const moduleContent = document.querySelector('.content-container');


        // Add event listener to the left menu
        document.getElementById('reading').addEventListener('click', function(event) {
            event.preventDefault();
			moduleContent.innerHTML = '';
            // Update text of the elements
            moduleContent.innerHTML = `
			<p>To execute a mount escape in Jiu-Jitsu, practitioners employ a strategic combination of bridging and shrimping techniques to create space and disrupt their opponent's control. Starting from a defensive posture with framing against the hips, the practitioner initiates a powerful bridge, lifting their hips off the ground to unbalance the opponent. Simultaneously, they perform a shrimp movement, sliding their hips laterally to create additional distance. This coordinated effort creates the necessary space to insert a leg between themselves and their opponent, paving the way for a transition to a more advantageous position. Through precise timing and fluid execution of these fundamental movements, practitioners can effectively escape the mount and regain control of the grappling exchange.</p>
			<p>Executing a side control escape involves skillfully bridging and shrimping to create space and regain guard from a tight side control position. The practitioner strategically uses their far-side arm to frame against the opponent's hip or shoulder while positioning their near-side knee against the opponent's torso. With a powerful bridge, they drive their far-side knee underneath the opponent's body, leveraging the shrimp motion to create distance. This coordinated movement sequence disrupts the opponent's weight distribution, allowing the practitioner to escape and transition to a more advantageous position. Through precise execution of bridging and shrimping techniques, the practitioner effectively neutralizes the opponent's control and sets the stage for further offensive or defensive actions.</p>
			<p>To execute a kesa gatame escape, The practitioner begins by framing their arms against the opponent's body to create space. With precise timing, they execute a powerful bridge to lift the opponent's weight slightly off them, followed by a swift shrimp motion to create further space. This coordinated effort disrupts the opponent's balance and pressure, allowing the practitioner to slide out from underneath and transition to a more advantageous position. By employing bridging and shrimping techniques effectively, the practitioner can escape Kesa Gatame and turn the tide of the match in their favor.</p>
		    `;
		});
		// Add event listener to the left menu
        document.getElementById('video').addEventListener('click', function(event) {
            event.preventDefault();
			moduleContent.innerHTML = '';
            // Update text of the elements
            moduleContent.innerHTML += '<div class = "video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/EMEueexp9zU?si=Fwkb_Q_AQZn4Z36R" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
		    moduleContent.innerHTML += '<div class = "video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/cuXq-k__9lQ?si=ujbzRLTo-RmS2BWX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
			moduleContent.innerHTML += '<div class = "video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/2HSKErP8oSY?si=OmBYY808tLtYMbTx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
        });
		
// Add event listener to the left menu
document.getElementById('quiz').addEventListener('click', function(event) {
    event.preventDefault();
    // Clear previous content
    moduleContent.innerHTML = '';
    // Update text of the elements with the quiz questions
    moduleContent.innerHTML = `
        <ol>
            <li>What is the primary goal of escaping from the mount position?</li>
            <ul>
                <li><input type="radio" id="q1a" name="q1" value="a"><label for="q1a">To increase pressure on the opponent</label></li>
                <li><input type="radio" id="q1b" name="q1" value="b"><label for="q1b">To free oneself from the opponent's control</label></li>
                <li><input type="radio" id="q1c" name="q1" value="c"><label for="q1c">To secure a submission hold</label></li>
            </ul>
            <li>What is the key principle behind an elbow escape from side control?</li>
            <ul>
                <li><input type="radio" id="q2a" name="q2" value="a"><label for="q2a">Creating space by pushing the opponent away</label></li>
                <li><input type="radio" id="q2b" name="q2" value="b"><label for="q2b">Using hip movement to create distance and regain guard</label></li>
                <li><input type="radio" id="q2c" name="q2" value="c"><label for="q2c">Securing the opponent's arms to prevent strikes</label></li>
            </ul>
            <li>What is the primary objective of a knee escape from Kesa Gatame?</li>
            <ul>
                <li><input type="radio" id="q3a" name="q3" value="a"><label for="q3a">To establish a dominant position over the opponent</label></li>
                <li><input type="radio" id="q3b" name="q3" value="b"><label for="q3b">To create distance and regain guard</label></li>
                <li><input type="radio" id="q3c" name="q3" value="c"><label for="q3c">To transition to side control</label></li>
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
        const correctAnswers = ['b', 'b', 'b'];
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

	</div>
</body>

</html>
