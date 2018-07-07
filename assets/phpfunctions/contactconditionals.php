 <?php
 function checkContactFormPHPResponse(){
    if (isset($_GET['success'])){
      if ($_GET['success'] == "true"){
        echo "<p style='color: #2ecc71'>Your message was sent successfully</p>";
      }
      elseif ($_GET['success'] == "missingPOSTvars"){
        echo "<p style='color: #c0392b'>We are sorry, but there appears to be a problem with the form you submitted. Your card has not been charged.</p>";
      }
      elseif ($_GET['success'] == "myend"){
        echo "<p style='color: #c0392b'>We are sorry, but there appears to be a problem on my end. Your card has not been charged.</p>";
      }
      elseif ($_GET['success'] == "stripesend"){
        echo "<p style='color: #c0392b'>We are sorry, but there appears to be a problem with my credit card processor, Stripe. Your card has not been charged.</p>";
      }
      else {
        echo "<p style='color: #c0392b'>".$_GET['success']."</p>";
      }
    }
  } ?>