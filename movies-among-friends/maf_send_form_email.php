<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "lbutchart@triad.rr.com, lucasbutchart@triad.rr.com, newriverreleasing@gmail.com";
    $email_subject = "Free One Year Membership from Movies Among Friends";
     
     
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
        !isset($_POST['email'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
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
    
     
// create email headers
$headers = 'From: '.$name."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $headers);  
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


<body>


<!-- navigation -->
<?php include '../nav.php'; ?>
<!-- end navigation -->

  <div id="main">

    <!-- header -->
    <?php include '../header.php'; ?>
    <!-- end header -->


    <!-- page title -->
    <div class="container">
      <div class="row">
        <div class="span12 page-title">
          <span>We're Almost There</span>
        </div>
      </div>
    </div>
    <!-- end page title -->


    <!-- email & name -->
    <div class="container">
      <div class="row">
        <div class="span6" style="height:125px;">
          <p>Great!!! We're almost there. Check you email inbox for your free access to Movies Among Friends. Please allow 24 hours for delivery. See you on the other side.</p>
        </div>
        <div class="span6 last">
          <img src="../img/maf-big.jpg" alt="Movies Among Friends Logo">
        </div>
        </div>
      </div>
    </div>
    <!-- end email & name -->


    <!-- bottom border -->
    <div class="container">
      <div class="row">
        <div class="span12 bottom-border">
        </div>
      </div>
    </div>
    <!-- end bottom border -->

  </div>

<!-- footer -->
<?php include '../footer.php'; ?>
<!-- end footer -->


<!-- javascript -->



  <script>
    $('.dropdown-toggle').dropdown()
    $(".collapse").collapse()
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