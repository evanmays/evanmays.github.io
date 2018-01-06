<?php
$title = "Evan's Blog Posts";
$description = "Evan Mays' blog.";
$ogType = "website";
$img = "noimageyet";
$url = "https://evanmays.com/blog/";

include "../assets/phpfunctions/header.php";
include "../assets/phpfunctions/post.php"; 

$posts = [
	["I'm learning VR in 21 Days", "Jan 5th, 2018", "//evanmays.com/assets/img/augmented-reality-1280x853.jpg", "<p>I'm learning virtual reality (VR)! I've never done anything in VR before, but in 21 days, I'll have a demo version of a sci-fi target practice game. Imagine laser beams that shoot from your eyes, arcade-style levels that increase in difficulty, and hopefully astonishing graphics.</p>", "https://evanmays.com/blog/Im-Learning-VR-in-21-Days"]
];
$postsPerPage = 5;

function displayPostInBox($title, $date, $img, $snippet, $link) {
	?>
		<div class="postInBox">
			<h3><?php echo $date; ?></h3>
			<img class="large-blog-img img-in-box" src="<?php echo $img; ?>" />
			<h2><?php echo $title; ?></h2>
			<?php echo $snippet; ?>
			<p><a href="<?php echo $link; ?>">Read more</a></p>
		</div>
	<?
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