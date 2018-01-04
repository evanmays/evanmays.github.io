<?php $currentPage = "blog";
include "../assets/phpfunctions/header.php";
include "../assets/phpfunctions/post.php"; 

$posts = [
	[title, date, image],
	[title, date, image],
	[title, date, image],
	[title, date, image],
	[title, date, image],
	[title, date, image]
];
$postsPerPage = 5;

function displayPostInBox($title, $date, $img) {
	?>
		<div class="postInBox">
			<?php echo $title; ?>
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
		        					displayPostInBox($title, $date, $img);
		        				}
		        				else {
		        					$pagination = true;
		        					break;
		        				}
		        			}
		        			if ($pagination) {
		        				echo "<a href=''>Click here to view the next older $postsPerPage posts</a>";
		        			}
		        		?>
	        		</div><!-- /col-lg-8 -->
	      		</div><!-- /row -->
	    	</div> <!-- /container -->
		</div><!-- /hello -->

    <?php include "../assets/phpfunctions/footer.php"; ?>