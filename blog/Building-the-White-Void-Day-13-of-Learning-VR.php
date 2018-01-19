<?php
$title = "I'm Learning VR Day 13: Building the White Void";
$description = "Today is day 13 of my challenge to learn virtual reality development in 21 days. I already had a working game and an idea of how I wanted it to look. Over the last few days, I brought the aesthetic of the game to life. You can see the game's new logo above!";
$ogType = "article";
$img = "https://evanmays.com/assets/img/White-Void-first-logo.jpg";
$url = "https://evanmays.com/blog/Building-the-White-Void-Day-13-of-Learning-VR";
$blog = true;

include "../assets/phpfunctions/header.php";
include "../assets/phpfunctions/post.php"; ?>
      
      
		<div id="hello">
	    	<div class="container">
	      		<div class="row">
	        		<div class="col-lg-8 col-lg-offset-2 centered">
		        		<?php headline($title, 4, "Jan 17th, 2018"); ?>
		        		<img class="large-blog-img" src="//evanmays.com/assets/img/White-Void-first-logo.jpg" />
		                <p>
		                	Today is day 13 of my challenge to learn virtual reality development in 21 days. I already had a working game and an idea of how I wanted it to look. Over the last few days, I brought the aesthetic of the game to life. You can see the game's new logo above!
		                </p>
		                <p>
		                	The first step was redoing the game's scene. The room from my game looked artificial (which I'll talk more about below). So, I changed the scene to be a white void.
		                </p>
		                <p>
		                	Then, I outlined the playable area of the game's floor to make it look like an invisible floor existed despite all the white space. There's an image of the final product at the bottom of this post.
		                </p>
		                <h2>
		                	Redesigning the Characters
		                </h2>
		                <p>
		                	I needed characters to replace the red and green rectangles I previously used. I found two images of 3D bubble men and edited them in photoshop to "flatten" out the pictures.
		                </p>
		                <p>
		                	The bubble man holding a traffic cone is friendly. The player loses points if they hit him. The bubble man holding the treasure chest is a thief. So, the player gains points for shooting a laser at the thief. I want to add different designs for the character types later, but now that I have the flattening process down that will be quick.
		                </p>
		                <p>
		                	You can see before and after images of the flattening process here:
		                </p>
		                <img class="medium-blog-img" src="//evanmays.com/assets/img/friendly-character-before-and-after-photoshop.png" />
		                <img class="medium-blog-img" src="//evanmays.com/assets/img/enemy-character-before-and-after-photoshop.png" />
		                <h2>
		                	Photoshopping the Characters
		                </h2>
		                <p>
		                	Game designers use pictures from real life all the time in their games. Say I'm a game designer who designs a wall. I'll find a wall in real life that looks like the one I want in my game, snap a photo, then put it in the game.
		                </p>
		                <p>
		                	Usually, these photos aren't ready to go. They have to be photoshopped to look good in a video game environment.
		                </p>
		                <p>
		                	Today, I learned game designers flatten the images they find. The way I think about flattening is that it's the opposite of blurring. Blurring removes the small details in an image. Flattening removes the large details. You can sort of see what I mean in the before and after pictures above.
		                </p>
		                <p>
		                	The reason flattening is necessary is that game designers will take a picture of a small part of that wall, then repeat that picture. That small part of the wall they took a picture of may not have been evenly lit. If it were more lit on the right side than the left, every time that image repeated, it would be obvious that the game's wall is artificial. 
		                </p>
		                <p>
		                	You can see the need for flattening in an image of my game from the last post. I'll put the picture here.
		                </p>
		                <img class="medium-blog-img" src="//evanmays.com/assets/img/experimenting-with-3D-textures-in-VR.png" />
		                <p>
		                	I dropped that whole design. But, I brought the idea of flattening to my new design. I flattened my characters to make them look like they belong in the scene. Here's the process I created from scouring the internet for different techniques.
		                </p>
		                <ul>
		                	<li><strong>1. High Pass Filter.</strong> This filter is most commonly known for removing the large details in an image. The large details are considered low frequency, so the high pass filter only lets the high frequency (small details) through to the processed image.</li>
		                	<li><strong>2. Desaturate.</strong> The High Pass Filter left a weird glow in a few places, so I needed to desaturate to remove that weird glow.</li>
		                	<li><strong>3. Contrast.</strong> It added a little-needed sharpness after desaturating.</li>
		                	<li><strong>4. Posterize.</strong> Posterize gave me a cool cartoony looking effect and removed differences in lighting from different spots in the image.</li>
		                </ul>
		                <h2>
		                	The Final Product for Today
		                </h2>
		                <img class="medium-blog-img" src="//evanmays.com/assets/img/White-Void-gameplay.png" />
	        		</div><!-- /col-lg-8 -->
	      		</div><!-- /row -->
	      		<?php include "../assets/phpfunctions/blogfooter.php"; ?>
	    	</div> <!-- /container -->
		</div><!-- /hello -->

    <?php include "../assets/phpfunctions/footer.php"; ?>