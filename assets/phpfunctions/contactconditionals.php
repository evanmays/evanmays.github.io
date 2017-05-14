 <?php
 function checkContactFormPHPResponse(){
    if (isset($_GET['success'])){
      if ($_GET['success'] == "true"){
        echo "<p>Your message was sent successfully</p>";
      }
      elseif ($_GET['success'] == "email"){
        echo "<p>Your email is missing</p>";
      }
      elseif ($_GET['success'] == "phone"){
        echo "<p>Your phone number is missing</p>";
      }
      elseif ($_GET['success'] == "message"){
        echo "<p>Your message is missing</p>";
      }
      elseif ($_GET['success'] == "problem"){
        echo "<p>We are sorry, but there appears to be a problem with the form you submitted. 
        Please try contacting me with the info to the right.</p>";
      }
      elseif ($_GET['success'] == "invalidemail"){
        echo "<p>The Email Address you entered does not appear to be valid.</p>";
      }
      elseif ($_GET['success'] == "invalidname"){
        echo "<p>The Name you entered does not appear to be valid.</p>";
      }
      elseif ($_GET['success'] == "invalidmessage"){
        echo "<p>The Message you entered does not appear to be valid.</p>";
      }
      elseif ($_GET['success'] == "invalidname"){
        echo "<p>The Name you entered does not appear to be valid.</p>";
      }
      elseif ($_GET['success'] == "invalidphone"){
        echo "<p>The Phone Number you entered does not appear to be valid.</p>";
      }
    }
  } ?>