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
		      <span>The Form</span>
		    </div>
		  </div>
		</div>
		<!-- end page title -->


		<!-- contact form -->
		<div class="container">
			<div class="row">
				<div class="span6 ">
					<h2></h2>
					<form name="contactform" method="post" action="send_form_email.php">
						<table width="100%">
						<tr>
						 <td valign="top">
						  <input  area-required="true" required type="text" name="name" placeholder="name" maxlength="50" size="30">
						 </td>
						</tr>
						<tr>
						 <td valign="top">
						  <input  area-required="true" required type="email" name="email" placeholder="email" maxlength="80" size="30">
						 </td>
						</tr>
						<tr>
						 <td valign="top">
						  <textarea  area-required="true" required name="message" placeholder="message" maxlength="1000" cols="25" rows="6"></textarea>
						 </td>
						</tr>
						<tr>
						 <td class="contact-button" colspan="2" style="text-align:right; float:right;">
						  <input type="submit" class="btn btn-danger" value="Submit »">
						</td>
						</tr>
						</table>
					</form>
				</div>
				<div class="span5 offset1">
					<h2>Contact Us</h2>
					<p>You can contact New River Releasing by using the form to your left or the social networks below.<br><br>We also invite you to subscribe to our newsletter using the form above.</p>

					<h2>Social Networks</h2>
					<div class="span1" style="margin:0px;">
						<a href="http://www.twitter.com/newriver_nc" target="_blank"><img src="/img/twitter-small.png" alt="twitter" title="New River on Twitter"/></a>
					</div>
					<div class="span1">
						<a href="http://www.facebook.com/newriverreleasing" target="_blank"><img src="/img/facebook-small.png" alt="facebook" title="New River on Facebook"/></a>
					</div>
					<div class="span1">
						<a href="http://www.wunderkit.com/#/newriverreleasing" target="_blank"><img src="/img/wunderkit-small.png"alt="wunderkit" title="New River on Wunderkit"/></a>
					</div>
				</div>	
			</div>
		</div>
		<!-- end contact form -->


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
				<a class="m8m-logo" style="float:right;" href="http://middle8media.com" title="Middle8Media" target="_blank"></a>
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
	jQuery(document).ready(function($){
        $(".testimonialrotator").testimonialrotator({
			settings_slideshowTime:5
			});
});
	</script>
<!-- end javascript -->


</body>