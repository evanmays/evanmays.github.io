<?php
$title = "I Made a VR Game in 21 Days";
$description = "Today is the last day of my challenge to learn virtual reality development in 21 days. Over the past few days, I made a few small additions/changes to my game. Today, I finished the game!";
$ogType = "article";
$img = "https://evanmays.com/assets/img/White-Void-first-logo.jpg";
$url = "https://evanmays.com/blog/I-Made-a-VR-Game-in-21-Days";
$blog = true;

include "../assets/phpfunctions/header.php";
include "../assets/phpfunctions/post.php"; ?>
      
      
		<div id="hello">
	    	<div class="container">
	      		<div class="row">
	        		<div class="col-lg-8 col-lg-offset-2 centered">
		        		<?php headline($title, 3, "Jan 25th, 2018"); ?>
		        		<img class="large-blog-img" src="//evanmays.com/assets/img/White-Void-first-logo.jpg" />
		                <p>
		                	Today is the last day of my challenge to learn virtual reality development in 21 days. Over the past few days, I made a few small additions/changes to my game. Today, I finished the game!
		                </p>
		                <p>
		                	I changed/added five more pieces to the game over the past few days.
		                </p>
		                <ul>
		                	<li>
		                		<strong>1. I removed the drones.</strong> I replaced them with characters who move across the room. These moving characters are harder to hit than characters who stand still.
		                	</li>
		                	<li>
		                		<strong>2. New designs.</strong> The game was a little bland with only one type of construction worker and one type of bad guy. So, I added new character designs to spice things up.
		                	</li>
		                	<li>
		                		<strong>3. Background music.</strong> What kind of game would it be without background music? Not a fun one. Music is necessary.
		                	</li>
		                	<li>
		                		<strong>4. I updated the crosshair design.</strong> The crosshair is cool because it only shows up when the player is shooting. It's a challenge because instead of aiming then shooting. The player has to shoot then aim.
		                	</li>
		                	<li>
		                		<strong>5. New score system (game mechanics).</strong> I took a hint from Fruit Ninja on this one. In Fruit Ninja, there's a 60-second timer that counts down until the round is over. When the player slices a fruit, they gain a point. When the player slices a bomb, they lose time from their timer. My game will use similar mechanics. I'll replace fruit with bad guys and bombs with construction workers.
		                	</li>
		                </ul>
		                <h2>The Final Product</h2>
		                <p>
		                	The rules of the game are simple. Shoot the bad guys, don't shoot the construction workers. The player has 60 seconds to hit as many bad guys as possible.
		                </p>
		                <p>
		                	I'll put a video of me playing the game below. If you have some coding experience and want to try the game out for yourself, check out the source code on GitHub: 
		                </p>
		                <p>
		                	<a href="https://github.com/evanmays/My-First-VR-Game">https://github.com/evanmays/My-First-VR-Game</a>
		                </p>
		                <video width="640" height="360" autoplay controls>
							<source src="//evanmays.com/assets/vid/White-Void-Demo.mp4" type="video/mp4">
							<source src="//evanmays.com/assets/vid/White-Void-Demo.webm" type="video/webm">
							Your browser does not support the video.
		        		</video>
	        		</div><!-- /col-lg-8 -->
	      		</div><!-- /row -->
	      		<?php include "../assets/phpfunctions/blogfooter.php"; ?>
	    	</div> <!-- /container -->
		</div><!-- /hello -->

    <?php include "../assets/phpfunctions/footer.php"; ?>