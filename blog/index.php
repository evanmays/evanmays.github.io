<?php $currentPage = "blog";
include "../assets/phpfunctions/header.php";
include "../assets/phpfunctions/post.php"; 

$posts = [
	["Post Template", "Jan 4th, 2018", image, "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque feugiat, lacus nec vestibulum pretium, velit urna laoreet nisi, sit amet scelerisque velit sapien vitae turpis. Suspendisse mollis ultrices sem, sed ullamcorper felis maximus interdum. Curabitur sed dolor eget sem tincidunt consequat ac nec dolor. Phasellus nunc ipsum, varius vel pharetra quis, aliquam id ante.</p>", "//evanmays.com/blog/post_template.php"],
	[title, date, image, snippet, link],
	[title, date, image, snippet, link],
	[title, date, image, snippet, link],
	[title, date, image, snippet, link],
	[title, date, image, snippet, link],
	[title, date, image, snippet, link],
	[title, date, image, snippet, link],
	[title, date, image, snippet, link]
];
$postsPerPage = 5;

function displayPostInBox($title, $date, $img, $snippet, $link) {
	?>
		<div class="postInBox">
			<h3><?php echo $date; ?></h3>
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