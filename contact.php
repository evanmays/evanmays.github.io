<?php 
$title = "Contact Evan Mays";
$description = "Evan Mays' contact info";
$ogType = "website";
$img = "http://huguenotmuseum.org/wp-content/uploads/2015/03/contact-us1.jpg";
$url = "https://evanmays.com/contact";

include "assets/phpfunctions/header.php"; ?>
		<div id="hello">
	    	<div class="container">
	      		<div class="row">
	        		<div class="col-lg-8 col-lg-offset-2 centered">
	          		<h1>Contact</h1>
                <div class="row grid">
                  <div class="col-lg-6 col-md-6 centered">
                    <?php
                    include "assets/phpfunctions/contactconditionals.php";
                    checkContactFormPHPResponse();
                    ?>
                    <form name="contactform" method="post" action="assets/phpfunctions/send_form_email.php"> <!-- go to this page #contact -->
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email Addres</label>
                        <input type="email" class="form-control" id="emailInput" placeholder="Enter email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="tel" class="form-control" id="exampleInputEmail1" placeholder="Enter phone" name="phone">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Message</label>
                        <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter message" name="message" data-gramm="" data-txt_gramm_id="9f7cc126-b708-1d58-6d78-b0eef7a90e42"></textarea>
                      </div>
                      <button type="submit" class="btn btn-default" id="customButton">Pay with Card</button>
                      <div class="form-group">
                        <label>
                          My contact form costs $1 to use. The $1 prevents spam and makes sure I read every message.
                        </label>
                        <label>
                          All credit card info is stored on Stripe or Apple's servers.
                        </label>
                      </div>
                    </form>
                  </div>
                  <div class="col-lg-6 col-md-6 centered">
                    <p>Email:<br><a href="mailto:business@evanmays.com">business@evanmays.com</a></p>
                    <p>Phone:<br><a href="tel:6319657484">(631) 965-7484</a></p>
                    <p>Contact me today!</p>
                  </div>
                </div>

	  
	        		</div><!-- /col-lg-8 -->
	      		</div><!-- /row -->
	    	</div> <!-- /container -->
		</div><!-- /hello -->
    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script>
    var handler = StripeCheckout.configure({
      key: 'pk_live_r6alnlcg0s2Y923CV5JVutgd',
      image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
      locale: 'auto',
      token: function(token) {
        // You can access the token ID with `token.id`.
        // Get the token ID to your server-side code for use.
      }
    });

    document.getElementById("customButton").addEventListener('click', function(e) {
      // Open Checkout with further options:
      handler.open({
        name: "Contact Me",
        description: "I don't like spam.",
        amount: 100,
        zipCode: true,
        image: "https://stripe.com/img/documentation/checkout/marketplace.png",
        locale: "auto",
        email: document.getElementById("emailInput").value,
      });
      e.preventDefault();
    });

    // Close Checkout on page navigation:
    window.addEventListener('popstate', function() {
      handler.close();
    });
    </script>

    <?php include "assets/phpfunctions/footer.php"; ?>