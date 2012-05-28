<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "newriverreleasing@gmail.com";
    $email_subject = "Message via New River Releasing";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $message = $_POST['message']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
  if(strlen($message) < 2) {
    $error_message .= 'The message you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<!doctype html>
<html>
<head>
<?php include '../head.php'; ?>
  <script src="../js/testimonialrotator.js"></script>
  <!--[if !IE 7]>
  <style type="text/css">
    #wrap {display:table;height:100%}
  </style>
  <![endif]-->
</head>



<style>

html, body {height: 100%;}

#footer-wrapper {
  min-height: 100%;
}

#main {
  overflow:auto;
  padding-bottom: 150px;
}  /* must be same height as the footer */

#footer {
  position: relative;
  margin-top: -75px; /* negative value of footer height */
  height: 75px;
  clear:both;
} 

/*Opera Fix*/
body:before {
  content:"";
  height:100%;
  float:left;
  width:0;
  margin-top:-32767px;/* thank you Erik J - negate effect of float*/
}
  
</style>



<body>


<!-- navigation -->
<?php include '../nav.php'; ?>
<!-- end navigation -->

<div id="footer-wrapper">
  <div id="main">

    <!-- header -->
    <?php include '../header.php'; ?>
    <!-- end header -->


 

<!-- page title -->
<div class="container">
  <div class="row">
    <div class="span12 page-title">
      <span>Thank You</span>
    </div>
  </div>
</div>
<!-- end page title -->


<!--call to action -->
<div class="container">
  <div class="row">
    <div id="thank-you" class="span6">
    <h2>We'll be in touch very soon.</h2>
       <p><em>In the meantime we invite you to subscribe to our monthly newsletter using the form above and connect with us online via the social networks to your right.</em></p>
    </div>
  <div class="span4 offset1">
      <h2>Social Networks</h2>
      <div class="span1" style="margin:0px;">
        <a href="http://www.twitter.com/newriver_nc"><img src="/img/twitter-small.png" alt="twitter" title="New River on Twitter"/></a>
      </div>
      <div class="span1">
        <a href="http://www.facebook.com/newriverreleasing"><img src="/img/facebook-small.png" alt="facebook" title="New River on Facebook"/></a>
      </div>
      <div class="span1">
        <a href="http://www.wunderkit.com/#/newriverreleasing"><img src="/img/wunderkit-small.png"alt="wunderkit" title="New River on Wunderkit"/></a>
      </div>
  </div>
</div>

<!-- end call to action -->



    <!-- bottom border -->
    <div class="container">
      <div class="row">
        <div class="span12 bottom-border">
        </div>
      </div>
    </div>
    <!-- end bottom border -->


    <!-- rotating film quotes -->
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="testimonialrotator">
            <div class="testimonial">
              <span>"I think this is the beginning of a beautiful friendship"</span>
               <div class="the-author">Rick - "Casablanca"</div>
            </div>
            <div class="testimonial">
              <span>"Go ahead, make my day"</span>
               <div class="the-author">Harry Callahan - "Dirty Harry"</div>
            </div>
            <div class="testimonial">
              <span>"Remember George, no man is a failure who has friends."</span>
               <div class="the-author">Clarence - "It's a Wonderful Life"</div>
            </div>
            <div class="testimonial">
              <span>"E.T. Phone Home"</span>
               <div class="the-author">E.T. - "The Extra Terrestrial"</div>
            </div>
            <div class="testimonial">
              <span>"Alone, bad. Friend, good."</span>
               <div class="the-author">Frankenstein - "Bride of Frankenstein"</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end rotating film quotes -->
  </div>
</div>

<!-- footer -->
<footer id="footer">
<div class="container">
  <div class="row">
    <div class="span12">
      <div class="row">
        <div class="span12 copyright">
        <a class="m8m-logo" style="float:right;" href="http://middle8media.com" title="Middle8Media"></a>
        <!-- <a class="imdb-logo" href="#" title="New River on IMDB"/></a> -->  
        <p style="float:left;  padding:15px 0px;">© 2012 New River Releasing Company, LLC. All Rights Reserved ✪</p>  
        </div>
      </div>
    </div>
  </div>
</div>
</footer>
<!-- end footer -->


<!-- javascript -->

  <script>
    $('.dropdown-toggle').dropdown()
    $(".collapse").collapse()
  </script>

  <script>
    $('li').click(function(){
      $('li.active').removeClass('active');
        $(this).addClass('active');
  });
  </script>

    <script>
  jQuery(document).ready(function($){
        $(".testimonialrotator").testimonialrotator({
      settings_slideshowTime:5
      });
});
  </script>
  
<!-- end javascript -->


</body>

 
<?php
}
?>