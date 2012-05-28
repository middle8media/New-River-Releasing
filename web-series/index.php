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
			    <a href="#">Web Series</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>Web Series</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- web series -->
<div class="container">
	<div class="row">
		<div class="span12">
			<div class="row">

				<div class="thumbnail span4">
					<a href="#">
						<div class="the-hive-sprite">
							<span></span>
						</div>
					</a>
				</div>

	  		</div>
		</div>
	</div>
</div>
<!-- end web series -->


<!-- footer -->
<?php include '../footer.php'; ?>
<!-- end footer -->



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

	<script type="text/javascript">
	$(document).ready(function() {
		$('.the-hive-sprite').append('<span class="hover"></span>').each(function () {
		  var $span = $('> span.hover', this).css('opacity', 0);
		  $(this).hover(function () {
		    $span.stop().fadeTo(500, 1);
		  }, function () {
		    $span.stop().fadeTo(500, 0);
		  });
		});
	});
	</script>

</body>