<?php
$title = "I'm Learning VR Day 2: Animations and Gameplay";
$description = "I'm going to make a virtual reality game in 21 days. My first day was about making basic shapes and putting them into place. Today I've animated the game to be playable.";
$ogType = "article";
$img = "https://evanmays.com/assets/img/virtual-tug-of-war-1280x720.jpg";
$url = "https://evanmays.com/blog/Animations-and-Gameplay-Day-2-of-Learning-VR";
$blog = true;

include "../assets/phpfunctions/header.php";
include "../assets/phpfunctions/post.php"; ?>
      
      
		<div id="hello">
	    	<div class="container">
	      		<div class="row">
	        		<div class="col-lg-8 col-lg-offset-2 centered">
		        		<?php headline($title, 4, "Jan 6th, 2018"); ?>
		        		<img class="large-blog-img" src="//evanmays.com/assets/img/virtual-tug-of-war-1920x1080.jpg" />
		                <p>
		                	I'm going to make a virtual reality game in 21 days. My first day was about making basic shapes and putting them into place. Today I've animated the game to be playable.
		                </p>
		                <p>
		                	When I started to learn VR, I expected it would take at least a week to get a basic version of the game running. However, it turns out A-Frame (<a href="https://evanmays.com/blog/Making-the-Virtual-World-Day-1-of-Learning-VR">read the definition here</a>) makes life easy for animating.
		                </p>
		                <p>
		                	The way animations work in A-Frame is I set the original position, in XYZ coordinates, then I set the end position. I can also choose if I want the object to move from point A to B in 5 milliseconds, 500 milliseconds, or as many milliseconds as I want.
		                </p>
		                <h2>
		                	Coding the Gameplay
		                </h2>
		                <p>
		                	I am not using the virtual reality headset since there is no way for the user to press any buttons while their headset is on. So, I'll have to get around to fixing that tomorrow since using a headset for VR is the whole point. Right now, the game is only playable in my web browser.
		                </p>
		                <p>
		                	I started with the basics. "Press spacebar to start the game."
		                </p>
		                <p>
		                	Then, people pop up from behind crates, and you have to shoot them before they disappear, which is every 5 seconds. Once they're gone, a new set of enemies show up from behind a different set of crates.
		                </p>
		                <p>
		                	I set up a randomizer, so every 5 seconds each crate has a 30% chance of having an enemy pop up behind it.
		                </p>
		                <p>
		                	I took the random idea a step further and made 1 in 20 of the people that pop up be your teammates. This way it's a challenge to avoid shooting your allies.
		                </p>
		                <p>
		                	I then took the whole concept a step further and added drones that fly across the ceiling. Just like the people behind the crates, the drones are usually enemies, but sometimes they are allies.
		                </p>
		                <p>
		                	I then took it a further step further and added a sound effect to the laser beam.
		                </p>
		                <p>
		                	After getting this all working, I added a scoreboard. So, technically the game is done. But really, my baby is still ugly. And it doesn't get progressively harder like I originally envisioned, so I'll use my last 19 days to perfect it.
		                </p>
		                <p>
		                	The green guys are the enemies, and the red guys are allies. Green means you should shoot them, red means stop.
		                </p>
		                <p>
		                	This video has sound.
		                </p>
		                <video width="640" height="480" autoplay controls>
							<source src="//evanmays.com/assets/vid/virtual-reality-gameplay.mp4" type="video/mp4">
							<source src="//evanmays.com/assets/vid/virtual-reality-gameplay.webm" type="video/webm">
							Your browser does not support the video.
		        		</video>
		        		<h2>
		        			Challenge of the Day? Shooting Lasers
		        		</h2>
		                <p>
		                	Here is the simple part.
		                </p>
		                <p>
		                	When the player presses the spacebar, the crosshair appears in the middle of their screen. The player has to adjust their vision to make sure the enemy falls within that crosshair. The blast takes a second to charge up, but once it's charged, BOOM!
		                </p>
		                <p>
		                	Here's the hard part.
		                </p>
		                <p>
		                	How does the computer know what is in the center of those crosshairs? It's easy for us to distinguish, but not so easy for a machine to figure it out.
		                </p>
		                <p>
		                	To make the laser delete the enemies that the player shot, I learned that I had to use ray casting. 
		                </p>
		                <h2>
		                	What is Ray Casting?
		                </h2>
		                <p>
		                	It's the foundation of 3d games.
		                </p>
		                <p>
		                	Ray casting lets the game know what is in front of the player. In my game, the player shoots lasers from their eyes. So I used ray casting to determine what the user's character is looking at when they blast the laser beam.
		                </p>
		                <p>
		                	Ray casting makes a straight line. The line starts in the character's eyes. Then, the line extends in the direction the eyes are pointing. As the line stretches infinitely far away, the computer is looking to see if anything hits the line.
		                </p>
		                <p>
		                	If that line hits something, then the character is looking directly at that object.
		                </p>
		                <p>
		                	Pretend the image below is a picture taken from your eyes. With ray casting, the computer will calculate that you are looking at the boat in the middle.
		                </p>
		                <img class="medium-blog-img" src="//evanmays.com/assets/img/ray-casting-concept-explained-2.jpg" />
		                <p>
		                	Here's another image. This one is a side view.
		                </p>
		                <img class="medium-blog-img" src="//evanmays.com/assets/img/ray-casting-concept-explained.png" />
	        		</div><!-- /col-lg-8 -->
	      		</div><!-- /row -->
	      		<?php include "../assets/phpfunctions/blogfooter.php"; ?>
	    	</div> <!-- /container -->
		</div><!-- /hello -->

    <?php include "../assets/phpfunctions/footer.php"; ?>