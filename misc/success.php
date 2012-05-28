<!doctype html>
<html>
<head>
<?php include 'head.php'; ?>
  <script src="js/testimonialrotator.js"></script>
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
<?php include 'nav.php'; ?>
<!-- end navigation -->

<div id="footer-wrapper">
  <div id="main">

    <!-- header -->
    <?php include 'header.php'; ?>
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