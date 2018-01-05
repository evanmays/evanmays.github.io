<?php
$title = "I'm learning VR in 21 Days";
$description = "I'm learning virtual reality (VR) by making a game! The end product will be a target practice game where you shoot lasers from your eyes. In 21 days, I'll have a completed beta version of the game, playable on smartphones.";
$ogType = "article";
$img = "noimageyet";
$url = "https://evanmays.com/blog/Im-Learning-VR-in-21-Days";
$blog = true;

include "../assets/phpfunctions/header.php";
include "../assets/phpfunctions/post.php"; ?>
      
      
		<div id="hello">
	    	<div class="container">
	      		<div class="row">
	        		<div class="col-lg-8 col-lg-offset-2 centered">
		        		<?php headline($title, 3, "Jan 5th, 2018"); ?>
		        		<img class="large-blog-img" src="//evanmays.com/assets/img/augmented-reality-1920x1280.jpg" />
		                <p>
		                	I'm learning virtual reality (VR) by making a game! The end product will be a target practice game where you shoot lasers from your eyes. In 21 days, I'll have a completed beta version of the game, playable on smartphones.
		                </p>
		                <h2>
		                	Why VR
		                </h2>
		                <p>
		                	I learned how to code from making video games. It was hands down some of the most fun I had as a kid. I always struggled at making 3d games though, so I want to push the limits of my skill. I'm not only going for a 3d game, but a 3d <em>immersive</em> game.
		                </p>
		                <p>
		                	Plus VR is developing to create a big change in how we interact with media. VR could have life changing applications. I want to have a part in that, even if a small part.
		                </p>
		                <h2>
		                	You can play the game to!
		                </h2>
		                <p>
		                	I don't have an Oculus Rift, but I do have a modern smartphone. Technology called WebVR means that any modern smartphone with an internet connection can run VR. I'm going to build on top of WebVR and use a google cardboard headset that I received at a hackathon in September.
		                </p>
		                <p>
		                	You don't need an expensive VR setup to play the game. You'll be able to play with a $20 google cardboard and a smartphone.
		                </p>
		                <h2>
		                	Why 21 Days?
		                </h2>
		                <p>
		                	The first day of classes for the Spring semester is January 29th. Since today is January 5th, I'll have just enough time to finish before classes start. Plus, 21 days is a lot of time. I'm excited to see how the project will turn out.
		                </p>
	        		</div><!-- /col-lg-8 -->
	      		</div><!-- /row -->
	      		<?php include "../assets/phpfunctions/blogfooter.php"; ?>
	    	</div> <!-- /container -->
		</div><!-- /hello -->

    <?php include "../assets/phpfunctions/footer.php"; ?>