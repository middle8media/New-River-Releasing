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
		      <span>Free Membership to MAF</span>
		    </div>
		  </div>
		</div>
		<!-- end page title -->


		<!-- email & name -->
		<div class="container">
			<div class="row">
				<div class="span6">
					<p>To receive your FREE Movies Among Friends Membership, please provide your name and email address, and you will be provided with complimentary access for one year.</p>
					<p>This offer is an exclusive offer separate from Digital Swag Machine. Your email is needed so that we can enroll you as a complimentary member. Once you are enrolled, you will receive an email notification.</p>
				</div>
				<div class="span6 last">
					<form name="contactform" method="post" action="maf_send_form_email.php">
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
						 <td class="contact-button" colspan="2" style="text-align:right; float:right;">
						  <input type="submit" class="btn btn-danger" value="Submit »">
						</td>
						</tr>
						</table>
					</form>
					<img src="../img/maf-big.jpg" alt="Movies Among Friends Logo">
				</div>
			</div>
		</div>
		<!-- end email & name -->


		<!-- bottom border -->
		<div class="container">
			<div class="row">
				<div class="span12 bottom-border" style="margin-bottom:150px;">
				</div>
			</div>
		</div>
		<!-- end bottom border -->

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