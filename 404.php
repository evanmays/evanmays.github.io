<?php
$title = "Page not found - 404";
$description = "This is a 404 page.";
$ogType = "website";
$img = "noneonpurpose"; //dont want to attract people to clicking on my 404
$url = "https://evanmays.com/404";

include "assets/phpfunctions/header.php"; ?>
		<div id="hello">
	    	<div class="container">
	      		<div class="row">
	        		<div class="col-lg-8 col-lg-offset-2 centered">
	          		<h1>404 - Oops... sorry.</h1>
			          <p>I'm not sure what page you are looking for.</p>
			          <p>I'm awesome though. <span class="sliding-u-r-l" id="homepage-sliding-u-r-l"><a href="/">Go to my homepage</a></span> and find out for yourself.</p>
			          <p>- Evan Mays</p>
	        		</div><!-- /col-lg-8 -->
	      		</div><!-- /row -->
	    	</div> <!-- /container -->
		</div><!-- /hello -->
    <?php include "assets/phpfunctions/footer.php"; ?>