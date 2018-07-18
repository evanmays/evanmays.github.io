<?php
$title = "Evan's Blog Posts";
$description = "Evan Mays' blog.";
$ogType = "website";
$img = "noimageyet";
$url = "https://evanmays.com/blog/";

include "../assets/phpfunctions/header.php";
include "../assets/phpfunctions/post.php"; 

$posts = [
	["I Made a VR Game in 21 Days", "Jan 25th, 2018", "/assets/img/White-Void-first-logo.jpg", "<p>Today is the last day of my challenge to learn virtual reality development in 21 days. Over the past few days, I made a few small additions/changes to my game. Today, I finished the game!</p>", "https://evanmays.com/blog/I-Made-a-VR-Game-in-21-Days"],
	["I'm Learning VR Day 15: Optimizing my Game", "Jan 19th, 2018", "/assets/img/optimization-header-img.png", "<p>Today is day 15 of my challenge to learn virtual reality development in 21 days. I'm two-thirds done! My game was running slow, so I optimized it today.</p>", "https://evanmays.com/blog/Optimizing-my-Game-Day-15-of-Learning-VR"],
	["I'm Learning VR Day 13: Building the White Void", "Jan 17th, 2018", "/assets/img/White-Void-first-logo.jpg", "<p>Today is day 13 of my challenge to learn virtual reality development in 21 days. I already had a working game and an idea of how I wanted it to look. Over the last few days, I brought the aesthetic of the game to life. You can see the game's new logo above!</p>", "https://evanmays.com/blog/Building-the-White-Void-Day-13-of-Learning-VR"],
	["I'm Learning VR Day 8: Naming the Game", "Jan 12th, 2018", "/assets/img/funny-white-bubble-characters-1280x853.jpg", "<p>Today is day 8 of my challenge to learn virtual reality development in 21 days. I’ve got a working game. However, it is mega ugly. I tried a few new designs over the past few days, but today I decided on the right aesthetic and picked a great name.</p>", "https://evanmays.com/blog/Naming-the-Game-Day-8-of-Learning-VR"],
	["I'm Learning VR Day 3: Making a VR Game Controller", "Jan 7th, 2018", "/assets/img/video-game-controller-1280x853.jpg", "<p>Today is day 3 of my challenge to learn VR game development in 21 days. Over the past two days, I built a working prototype of my game. On the 21st day, I'll release the game.</p>", "https://evanmays.com/blog/Making-a-VR-Game-Controller-Day-3-of-Learning-VR"],
	["I'm Learning VR Day 2: Animations and Gameplay", "Jan 6th, 2018", "/assets/img/virtual-tug-of-war-1280x720.jpg", "<p>I'm going to make a virtual reality game in 21 days. My first day was about making basic shapes and putting them into place. Today I've animated the game to be playable.</p>", "https://evanmays.com/blog/Animations-and-Gameplay-Day-2-of-Learning-VR"],
	["I'm Learning VR Day 1: Making the Virtual World", "Jan 5th, 2018", "/assets/img/hello-virtual-reality.jpg", "<p>Today is day 1 of my challenge to learn virtual reality. I want to create a game, and I've never done any virtual reality before. The first step is figuring out how to make a virtual world. It started off as a cylinder, a block, and a sphere. I added walls, a ceiling, and a TV to develop it further. Eventually, I was satisfied with version 0.1 of my virtual world.</p>", "https://evanmays.com/blog/Making-the-Virtual-World-Day-1-of-Learning-VR"],
	["I'm learning VR in 21 Days", "Jan 5th, 2018", "/assets/img/augmented-reality-1280x853.jpg", "<p>I'm learning virtual reality (VR)! I've never done anything in VR before, but in 21 days, I'll have a demo version of a sci-fi target practice game. Imagine laser beams that shoot from your eyes, arcade-style levels that increase in difficulty, and hopefully astonishing graphics.</p>", "https://evanmays.com/blog/Im-Learning-VR-in-21-Days"]
];
$postsPerPage = 10;

function displayPostInBox($title, $date, $img, $snippet, $link) {
	?>
		<div class="postInBox">
			<h3><?php echo $date; ?></h3>
			<img class="large-blog-img img-in-box" src="<?php echo $img; ?>" />
			<h2><?php echo $title; ?></h2>
			<?php echo $snippet; ?>
			<p><a href="<?php echo $link; ?>">Read more</a></p>
		</div>
	<?php
}
?>
      
      
		<div id="hello">
	    	<div class="container">
	      		<div class="row">
	        		<div class="col-lg-8 col-lg-offset-2 centered">
		        		<h1>Blog Posts</h1>
		        		<?php 
		        			$pagination = false;
		        			for ($i = 0; $i < count($posts); $i++) {
		        				if ($i < $postsPerPage) {
		        					$title = $posts[$i][0];
		        					$date = $posts[$i][1];
		        					$img = $posts[$i][2];
		        					$snippet = $posts[$i][3];
		        					$link = $posts[$i][4];
		        					displayPostInBox($title, $date, $img, $snippet, $link);
		        				}
		        				else {
		        					$pagination = true;
		        					break;
		        				}
		        			}
		        			if ($pagination) {
		        				echo "<a href=''>View the next $postsPerPage older posts</a>";
		        			}
		        		?>
	        		</div><!-- /col-lg-8 -->
	      		</div><!-- /row -->
	    	</div> <!-- /container -->
		</div><!-- /hello -->

<?php include "../assets/phpfunctions/footer.php"; ?>