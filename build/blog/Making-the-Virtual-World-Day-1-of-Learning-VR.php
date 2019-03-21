<?php
$title = "I'm Learning VR Day 1: Making the Virtual World";
$description = "Today is day 1 of my challenge to learn virtual reality. I want to create a game, and I've never done any virtual reality before. The first step is figuring out how to make a virtual world. It started off as a cylinder, a block, and a sphere. I added walls, a ceiling, and a TV to develop it further. Eventually, I was satisfied with version 0.1 of my virtual world.";
$ogType = "article";
$img = "https://evanmays.com/assets/img/hello-virtual-reality.jpg";
$url = "https://evanmays.com/blog/Making-the-Virtual-World-Day-1-of-Learning-VR";
$blog = true;

include "../assets/phpfunctions/header.php";
include "../assets/phpfunctions/post.php"; ?>
      
      
		<div id="hello">
	    	<div class="container">
	      		<div class="row">
	        		<div class="col-lg-8 col-lg-offset-2 centered">
		        		<?php headline($title, 5, "Jan 5th, 2018"); ?>
		        		<img class="large-blog-img" src="//evanmays.com/assets/img/hello-virtual-reality.jpg" />
		                <p>
		                	Today is day 1 of my challenge to learn virtual reality. I want to create a game, and I've never done any virtual reality before. The first step is figuring out how to make a virtual world. It started off as a cylinder, a block, and a sphere. I added walls, a ceiling, and a TV to develop it further. Eventually, I was satisfied with version 0.1 of my virtual world.
		                </p>
		                <p>
		                	I never really knew where to start. So, I put together a list of tools for the job. It took about an hour of googling to make this list.
		                </p>
		                <ul>
		                	<li>
		                		<strong>Sublime Text</strong> - It's like Microsoft Word but for coding.
		                	</li>
		                	<li>
		                		<strong>A-Frame</strong> - I'll describe what this is in a paragraph a few scrolls down.
		                	</li>
		                	<li>
		                		<strong>JavaScript</strong> - I'm using this coding language to bring the game to life. JavaScript lets me turn a static scene into a fun game.
		                	</li>
		                	<li>
		                		<strong>HTML</strong> - I'm using this coding language to design the 3d world 
		                	</li>
		                	<li>
		                		<strong>A-Frame Inspector</strong> - Usually a coder has to switch between coding and playing the game. The code changes the game; then you play the game to see those changes. A-Frame Inspector lets me make changes to the game while I play the game, saving time.
		                	</li>
		                	<li>
		                		<strong>A-Frame motion capture</strong> - This will let me record my actions in the virtual world. It might be useful when I start testing the game. I'm not using it yet, and I don't know how it works entirely.
		                	</li>
		                	<li>
		                		<strong>Python HTTP Server</strong> - This lets me code the game on my computer, then play it on my phone.
		                	</li>
		                	<li>
		                		<strong>GitHub</strong> - It's a backup service for the code. It also lets me publish my code publicly. So if you want to take a look, <a href="https://github.com/evanmays/My-First-VR-Game">check out my GitHub</a>.
		                	</li>
		                </ul>
		                <p>
		                	I've never heard of half the tools in this list. Luckily, A-frame has excellent guides on their website!
		                </p>
		                <h2>
		                	The Vision for my Finished Game
		                </h2>
		                <p>
		                	I sourced the idea from an array of movies and games I've watched/played before.
		                </p>
		                <p>
		                	The game features you, the player, as a soldier performing target practice in a gun range. Your goal is to hit the enemies that pop up and avoid hitting your teammates. It's sort of like the game Fruit Ninja (Fruit are enemies, bombs are teammates). I got the idea from a game I used to play called Jak II.
		                </p>
		                <p>
		                	Your weapon is a helmet that lets you shoot lasers in the direction you're looking. So, you turn your head to aim, press spacebar on your computer to fire, then make sure that you don't hit your teammates. If you know superheroes, you'll know which X-men has a super-power like the soldier in my game.
		                </p>
		                <h2>
		                	Coding The Virtual World
		                </h2>
		                <p>
		                	The code all starts with A-Frame. A-frame is the tool that converts my code into a 3d world. Truthfully, I had no idea if A-frame was the right tool. Then, I found a game built with A-frame. The game is called A-Blast, and it's not too far off from the kind of game I want to make. 
		                </p>
		                <p>
		                	Play A-Blast: <a href="https://aframe.io/a-blast/">https://aframe.io/a-blast/</a> (Press spacebar to shoot)
		                </p>
		                <p>
		                	So, with A-Frame I began with the cylinder, the block, and the sphere. This is what that code looks like
		                </p>
		                <pre>&lt;a-scene&gt;
&lt;a-box position="-1 0.5 -3" rotation="0 45 0" color="#4CC3D9"&gt;&lt;/a-box&gt;
&lt;a-sphere position="0 1.25 -5" radius="1.25" color="#EF2D5E"&gt;&lt;/a-sphere&gt;
&lt;a-cylinder position="1 0.75 -3" radius="0.5" height="1.5" color="#FFC65D"&gt;&lt;/a-cylinder&gt;
&lt;a-plane position="0 0 -4" rotation="-90 0 0" width="4" height="4" color="#7BC8A4"&gt;&lt;/a-plane&gt;
&lt;a-sky color="#ECECEC"&gt;&lt;/a-sky&gt;
&lt;/a-scene&gt;</pre>
		                <p>
		                	The line that starts with a-plane is the floor. The line that begins with a-sky is well, the sky. And so on. The a-scene is my virtual world which includes different pieces such as the sky and the floor.
		                </p>
		                <p>
		                	With just those seven lines of code, I've created a virtual world.
		                </p>
		                <p>
		                	I sucked in all the knowledge I could from A-Frame's website along with some YouTube videos to edit the world. I started with walls and a more prominent floor.
		                </p>
		                <p>
		                	Then came the Lamborghini, the women sitting on a stool, and the U.S. Space Shuttle which was sadly too big to fit in the little room I created.
		                </p>
		                <p>
		                	The women and the Lamborghini are in this photo. They're both all white right now, but you can still make out the woman's face.
		                </p>
		                <p>
		                	I put two of her in there so that you could see the depth in 3 dimensions.
		                </p>
		                <p>
		                	The game is super ugly, I know. Just take a look at it in 21 days, and save your advice until then.
		                </p>
		                <img class="medium-blog-img" src="//evanmays.com/assets/img/my-virtual-world-take-1.png" />
		                <p>
		                	Quick tip for anyone making a VR game: Don't make the walls the same color. It's impossible to tell where one wall ends and the other begins due to lighting.
		                </p>
		                <p>
		                	I added some new wall colors and laid out the scene for the game. You can even move around in it, thanks to WebVR (<a href="https://evanmays.com/blog/Im-Learning-VR-in-21-Days">read about WebVR</a>).
		                </p>
		                <p>
		                	I'll put the virtual world below. Everything looks very rough, so I'll explain what it all means.
		                </p>
		                <p>
		                	The orange boxes on the floor are crates. The purple sticks are enemies/allies that pop up from behind the crates. Those flying orange boxes are either enemy or ally drones that fly around. If you look left, You'll see a TV which keeps track of the score.
		                </p>
		                <p>
		                	The game isn't using any JavaScript right now, so it's an inanimate scene. It's still pretty cool though.
		                </p>
		                <p>
		                	Click and drag to look in different places. Use the arrow keys to move around.
		                </p>
		                <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
		                <style>
		                a-scene {
		                  height: 400px;
		                  width: 100%;
		                }
		            	</style>
		                <a-scene embedded>
		                  <!-- Camera -->
		                  <a-entity look-controls wasd-controls position="1 0 0" rotation="0 -90 0" fly="true" wsAxis="z" camera="userHeight: 1.6" look-controls>
		                    <!-- Heads Up Display -->
		                    <a-entity geometry="primitive: plane; height: 0.05; width: 0.05" position="0 0 -1"
		                      material="color: gray; opacity: 0.5"></a-entity>
		                  </a-entity>

		                  <!-- Room -->
		                  <a-plane position="7.5 0 0" rotation="-90 0 0" width="15" height="10" color="blue"></a-plane> <!-- floor -->
		                  <a-plane position="7.5 3 0" rotation="90 0 0" width="15" height="10" color="pink"></a-plane> <!-- ceiling -->
		                  <a-plane position="15 1.5 0" rotation="0 -90 0" width="10" height="3" color="green"></a-plane> <!-- back wall -->
		                  <a-plane position="7.5 1.5 -5" rotation="0 0 0" width="15" height="3" color="yellow"></a-plane> <!-- left wall -->
		                  <a-plane position="7.5 1.5 5" rotation="0 180 0" width="15" height="3" color="grey"></a-plane> <!-- right wall -->
		                  <a-sky color="black"></a-sky>

		                  <!-- Lighting -->
		                  <a-entity light="type: ambient; color: #BBB"></a-entity>
		                  <a-entity light="type: directional; color: #FFF; intensity: 0.6" position="-0.5 2.5 0"></a-entity>
		                    

		                  <!-- Scoreboard -->
		                  <a-plane position="2 2 -3" rotation="20 -20 0" width="1.572" height=".908" color="blue">
		                    <a-text value="Friendly Hits: 20\nGood hits: 3" align="center" height="20"></a-text>
		                  </a-plane>

		                  <!-- boxes and characters behind them-->
		                  <a-box color="tomato" position="12 .5 3" depth="1" height="1" width="1">
		                    <a-plane position=".75 .65 0" rotation="0 -90 0" width=".4" height="2.1" color="purple"></a-plane>
		                  </a-box>
		                  <a-box color="tomato" position="10 .5 -2" depth="1" height="1" width="1">
		                    <a-plane position=".75 .65 0" rotation="0 -90 0" width=".4" height="2.1" color="purple"></a-plane>
		                  </a-box>
		                  <a-box color="tomato" position="11 .5 1" depth="1" height="1" width="1"></a-box>
		                  <a-box color="tomato" position="9 .5 4" depth="1" height="1" width="1"></a-box>
		                  <a-box color="tomato" position="10 .5 -4" depth="1" height="1" width="1">
		                    <a-plane position=".75 .65 0" rotation="0 -90 0" width=".4" height="2.1" color="purple"></a-plane>
		                  </a-box>
		                  <a-box color="tomato" position="7 .5 3" depth="1" height="1" width="1"></a-box>
		                  <a-box color="tomato" position="7 .5 -2" depth="1" height="1" width="1"></a-box>
		                  <a-box color="tomato" position="5 .5 -4" depth="1" height="1" width="1">
		                    <a-plane position=".75 .65 0" rotation="0 -90 0" width=".4" height="2.1" color="purple"></a-plane>
		                  </a-box>
		                  <a-box color="tomato" position="8 .5 -.25" depth="1" height="1" width="1"></a-box>
		                  <a-box color="tomato" position="5 .5 0" depth="1" height="1" width="1"></a-box>
		                  <a-box color="tomato" position="5 .5 3.5" depth="1" height="1" width="1"></a-box>
		                  <a-box color="tomato" position="6.5 .5 1" depth="1" height="1" width="1">
		                    <a-plane position=".75 .65 0" rotation="0 -90 0" width=".4" height="2.1" color="purple"></a-plane>
		                  </a-box>
		                  <a-box color="tomato" position="3.5 .5 4.5" depth="1" height="1" width="1"></a-box>
		                  <a-box color="tomato" position="3.5 .5 -3.5" depth="1" height="1" width="1"></a-box>
		                  <a-box color="tomato" position="4.5 .5 -1.65" depth="1" height="1" width="1"></a-box>
		                  <a-box color="tomato" position="4.3 .5 1.55" depth="1" height="1" width="1">
		                    <a-plane position=".75 .65 0" rotation="0 -90 0" width=".4" height="2.1" color="purple"></a-plane>
		                  </a-box>

		                  <!-- Drones -->
		                  <a-box color="tomato" position="6.5 2.7 1" depth=".4" height=".1" width=".4"></a-box>
		                  <a-box color="tomato" position="8.2 2.8 -3" depth=".4" height=".1" width=".4"></a-box>
		                  <a-box color="tomato" position="3 2.9 4" depth=".4" height=".1" width=".4"></a-box>

		                </a-scene>
	        		</div><!-- /col-lg-8 -->
	      		</div><!-- /row -->
	      		<?php include "../assets/phpfunctions/blogfooter.php"; ?>
	    	</div> <!-- /container -->
		</div><!-- /hello -->

    <?php include "../assets/phpfunctions/footer.php"; ?>