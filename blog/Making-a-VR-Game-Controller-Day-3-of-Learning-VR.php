<?php
$title = "I'm Learning VR Day 3: Making a VR Game Controller";
$description = "Today is day 3 of my challenge to learn VR game development in 21 days. Over the past two days, I built a working prototype of my game. On the 21st day, I'll release the game.";
$ogType = "article";
$img = "https://evanmays.com/assets/img/video-game-controller-1280x853.jpg";
$url = "https://evanmays.com/blog/Making-a-VR-Game-Controller-Day-3-of-Learning-VR";
$blog = true;

include "../assets/phpfunctions/header.php";
include "../assets/phpfunctions/post.php"; ?>
      
      
		<div id="hello">
	    	<div class="container">
	      		<div class="row">
	        		<div class="col-lg-8 col-lg-offset-2 centered">
		        		<?php headline($title, 2, "Jan 7th, 2018"); ?>
		        		<img class="large-blog-img" src="//evanmays.com/assets/img/video-game-controller-1920x1279.jpg" />
		                <p>
		                	Today is day 3 of my challenge to learn VR game development in 21 days. Over the past two days, I built a working prototype of my game. On the 21st day, I'll release the game. 
		                </p>
		                <p>
		                	I don't have a fancy virtual reality headset. But I do have a smartphone and a $20 Google Cardboard headset.
		                </p>
		                <p>
		                	The problem with the Cardboard headset is that when you're in the virtual world, there is no way to control that world. The cardboard headset doesn't have any buttons on it. So, it seems impossible to make a game because games require interaction.
		                </p>
		                <p>
		                	So, I turned my computer into a VR controller. I had to learn a technology that allowed my laptop's keyboard to control the VR game on my phone.
		                </p>
		                <p>
		                	Specifically: When I press spacebar on my computer, the laser beam activates in the game on my phone.
		                </p>
		                <h2>
		                	The Technology Used
		                </h2>
		                <p>
		                	I decided to make two websites. One for the computer and one for the phone. The player has to open both sites on their respective devices. Once the user presses spacebar, the computer's web browser uses the internet to send to tell the phone's web browser that it is time to shoot.
		                </p>
		                <p>
		                	I tried a few things. The first tech was WebRTC. WebRTC is the connection between the computer and phone that lets them talk to each other. This is what we need.
		                </p>
		                <p>
		                	WebRTC is also one of the quickest ways to send messages between devices. So, when you press spacebar, there is a few millisecond delay.
		                </p>
		                <p>
		                	However, WebRTC is still a new technology, so it doesn't work on Apple devices yet.
		                </p>
		                <p>
		                	So, I had to switch to Web Sockets. Web Sockets work similarly to WebRTC, except when I press spacebar, my computer has to send a message to a server first, which then sends the message to my phone. Thus, web sockets aren't as quick.
		                </p>
		                <p>
		                	If WebRTC and Web Sockets were flights from New York to California, WebRTC would be the direct flight, while Web Sockets has a layover in Texas. Layover flights always take longer than direct flights. So, Web Sockets is slower. But, Web Sockets works on iPhones, so the compromise is worth it.
		                </p>
	        		</div><!-- /col-lg-8 -->
	      		</div><!-- /row -->
	      		<?php include "../assets/phpfunctions/blogfooter.php"; ?>
	    	</div> <!-- /container -->
		</div><!-- /hello -->

    <?php include "../assets/phpfunctions/footer.php"; ?>