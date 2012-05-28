<!doctype html>
<html>
<head>
<?php include '../head.php'; ?>
</head>

<body>
<!-- navigation -->
<?php include '../nav.php'; ?>
<!-- end navigation -->


<!-- header -->
<?php include '../header.php'; ?>
<!-- end header -->


<!-- page title -->
<div class="container">
	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
			  <li>
			    <a href="/">Home</a> <span class="divider">/</span>
			  </li>
			  <li class="active">
			    <a href="#">Feature Films</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>Feature Films</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- feature films -->
<div class="container">
	<div class="row">
		<div class="span12">
			<div class="row">
				<div class="thumbnail span4">
					<a href="lake-of-fire">
						<div class="lof-sprite">
							<span></span>
						</div>
					</a>
				</div>

				<div class="thumbnail span4">
				<a href="#">					
				    <div class="wrapper">
						<div class="harmonia-sprite">
							<span></span>
						</div>
					<div class="ribbon-wrapper">
	       				<div class="ribbon-red">In Progress</div>
				    </div>
				    </div>
				</a>
				</div>

				<a href="../short-films/horse">
				<div class="thumbnail span4" style="height:167px;">
				    <div class="wrapper">
					    <div class="horse-sprite">
							<span></span>
						</div>
					<div class="ribbon-wrapper">
       					<div class="ribbon-red">In Progress</div>
				    </div>	    
					</div>​
	  			</div>
				</a>

	  		</div>
		</div>
	</div>
</div>
<!-- end feature films -->


<!-- footer -->
<?php include '../footer.php'; ?>
<!-- end footer -->

<!-- javascript -->

	<script>
		$('li').click(function(){
			$('li.active').removeClass('active');
				$(this).addClass('active');
	});
	</script>

	<script>
		$('.dropdown-toggle').dropdown()
		$(".collapse").collapse()
	</script>

	<script type="text/javascript">
	$(document).ready(function() {
		$('.lof-sprite, .harmonia-sprite, .horse-sprite').append('<span class="hover"></span>').each(function () {
		  var $span = $('> span.hover', this).css('opacity', 0);
		  $(this).hover(function () {
		    $span.stop().fadeTo(500, 1);
		  }, function () {
		    $span.stop().fadeTo(500, 0);
		  });
		});
	});
	</script>

<!-- end javascript -->
</body>