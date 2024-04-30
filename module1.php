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
            <li><a href="#" id="video">Video</a></li>
            <li><a href="#" id="quiz">Quiz</a></li>
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
		const moduleContent = document.querySelector('.content-container');


        // Add event listener to the left menu
        document.getElementById('reading').addEventListener('click', function(event) {
            event.preventDefault();
			moduleContent.innerHTML = '';
            // Update text of the elements
            moduleContent.innerHTML = `
			<p>The bridge is a fundamental movement that not only strengthens your core and lower body but also serves as a critical skill in various BJJ positions and escapes. Let's dive into the step-by-step process of performing a perfect bridge: Begin by lying flat on your back with your knees bent and feet planted firmly on the ground. Ensure that your feet are hip-width apart, providing a stable base for the movement. Activate your core muscles by drawing your navel towards your spine and squeezing your glutes. This engagement provides stability and power throughout the bridge. Pressing through your heels, lift your hips off the ground, driving them towards the ceiling. As you lift, focus on keeping your shoulders and upper back firmly planted on the mat to maintain stability. Continue lifting until your body forms a straight line from your shoulders to your knees. Your weight should be supported by your shoulders, upper back, and feet. Hold the bridge position for a moment, then slowly lower your hips back to the starting position. Repeat the movement for the desired number of repetitions or as instructed by your instructor." </p>
			<p>To execute a shrimp, begin by lying flat on your back with your knees bent and your feet planted firmly on the ground. Next, initiate the movement by shifting your weight onto one side while keeping your shoulders and hips aligned. Extend your arm on the opposite side in the direction you intend to shrimp, using it as a pivot point. With a fluid motion, slide your hips away from your extended arm, utilizing your feet to push off the ground and generate momentum. As you shrimp, maintain a tight core and focus on creating space between yourself and your opponent. Repeat the movement on both sides to develop proficiency and adaptability in various grappling situations. This technique serves as a fundamental skill for escaping unfavorable positions and creating opportunities to advance your position in Brazilian Jiu-Jitsu engagements.</p>
			<p>To execute a hip heist in Brazilian Jiu-Jitsu, start by positioning yourself on your back with your knees bent and your feet planted firmly on the ground. Begin the movement by shifting your weight onto one side, bringing your knee toward your chest while keeping the other leg extended. As you do this, simultaneously push off with your extended leg and drive your hips upward and across to the opposite side. Use your arms for support and balance, keeping them close to your body to maintain control throughout the motion. Engage your core muscles to stabilize your body and facilitate the movement. Complete the hip heist by transitioning to a seated position with one knee up and the other leg extended behind you, ready to engage or defend as needed. Practice this technique regularly to develop agility, coordination, and the ability to swiftly change positions during grappling exchanges in Brazilian Jiu-Jitsu.</p>
			`;
        });
		
		        // Add event listener to the left menu
        document.getElementById('video').addEventListener('click', function(event) {
            event.preventDefault();
			moduleContent.innerHTML = '';
            // Update text of the elements
            moduleContent.innerHTML += '<div class = "video-container"><iframe width="200%" height="50%" src="https://www.youtube.com/embed/A9wyYrhGw0w?si=12JlCv45lFOEWZ3T" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
		    moduleContent.innerHTML += '<div class = "video-container"><iframe width="200%" height="50%" src="https://www.youtube.com/embed/w_0fqd8aQco?si=W5mu6l-kMHHG0w4X" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
			moduleContent.innerHTML += '<div class = "video-container"><iframe width="200%" height="50%" src="https://www.youtube.com/embed/pejtetvJGKY?si=y3Zn-W6v05V4FBw7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
        });
		
// Add event listener to the left menu
document.getElementById('quiz').addEventListener('click', function(event) {
    event.preventDefault();
    // Clear previous content
    moduleContent.innerHTML = '';
    // Update text of the elements with the quiz questions
    moduleContent.innerHTML = `
        <ol>
            <li>What is the objective of a bridge in Brazilian Jiu-Jitsu?</li>
            <ul>
                <li><input type="radio" id="q1a" name="q1" value="a"><label for="q1a">To strengthen the legs</label></li>
                <li><input type="radio" id="q1b" name="q1" value="b"><label for="q1b">Degredation of balance</label></li>
                <li><input type="radio" id="q1c" name="q1" value="c"><label for="q1c">To improve balance</label></li>
            </ul>
            <li>What are the key muscle groups engaged during a bridge?</li>
            <ul>
                <li><input type="radio" id="q2a" name="q2" value="a"><label for="q2a">Legs and arms</label></li>
                <li><input type="radio" id="q2b" name="q2" value="b"><label for="q2b">Core and glutes</label></li>
                <li><input type="radio" id="q2c" name="q2" value="c"><label for="q2c">Neck and shoulders</label></li>
            </ul>
            <li>Describe the step-by-step process of performing a bridge.</li>
            <ul>
                <li><input type="radio" id="q3a" name="q3" value="a"><label for="q3a">Lift hips off the ground while maintaining shoulder and feet contact</label></li>
                <li><input type="radio" id="q3b" name="q3" value="b"><label for="q3b">Lift shoulders off the ground while keeping hips and feet stationary</label></li>
                <li><input type="radio" id="q3c" name="q3" value="c"><label for="q3c">Roll onto one side while extending the legs</label></li>
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
        moduleContent.innerHTML = `<p>Quiz Submitted! Your score: ${score}/${correctAnswers.length}</p>`;
    } else {
        // Prompt user to answer all questions
        moduleContent.innerHTML = '<p>Please answer all questions.</p>';
    }
}
    </script>
</body>

</html>
