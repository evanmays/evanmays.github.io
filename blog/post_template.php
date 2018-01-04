<?php
$title = "Post Template";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque feugiat, lacus nec vestibulum pretium, velit urna laoreet nisi, sit amet scelerisque velit sapien vitae turpis. Suspendisse mollis ultrices sem, sed ullamcorper felis maximus interdum. Curabitur sed dolor eget sem tincidunt consequat ac nec dolor. Phasellus nunc ipsum, varius vel pharetra quis, aliquam id ante.";
$ogType = "article";
$img = "noimageyet";
$url = "https://evanmays.com/blog/post_template";

include "../assets/phpfunctions/header.php";
include "../assets/phpfunctions/post.php"; ?>
      
      
		<div id="hello">
	    	<div class="container">
	      		<div class="row">
	        		<div class="col-lg-8 col-lg-offset-2 centered">
		        		<?php headline($title, timetoread, date); ?>
		                <p>
		                	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque feugiat, lacus nec vestibulum pretium, velit urna laoreet nisi, sit amet scelerisque velit sapien vitae turpis. Suspendisse mollis ultrices sem, sed ullamcorper felis maximus interdum. Curabitur sed dolor eget sem tincidunt consequat ac nec dolor. Phasellus nunc ipsum, varius vel pharetra quis, aliquam id ante.
		                </p>
		                <p>
		                	Sed tortor leo, consequat nec tellus a, scelerisque sodales ligula. Sed maximus magna non metus tempus venenatis. Sed commodo ligula vel nulla pharetra pulvinar. Nunc eu sem eget nunc vestibulum volutpat eget ut diam.
		                </p>
		                <p>
		                	Sed in lectus viverra, maximus elit consequat, semper tortor. Nulla sem risus, congue nec nulla vel, efficitur efficitur dui. Pellentesque at orci augue.
		                </p>
		                <p>
		                	Donec molestie augue luctus, hendrerit arcu vel, dictum libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque vitae odio condimentum metus cursus interdum ac euismod nisi. Donec faucibus nibh augue, non cursus enim euismod et.
		                </p>
	        		</div><!-- /col-lg-8 -->
	      		</div><!-- /row -->
	    	</div> <!-- /container -->
		</div><!-- /hello -->

    <?php include "../assets/phpfunctions/footer.php"; ?>