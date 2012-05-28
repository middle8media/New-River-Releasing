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


<div class="container">
	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
			  <li>
			    <a href="/">Home</a> <span class="divider">/</span>
			  </li>
			  <li class="active">
			    <a href="#">Short Films</a>
			  </li>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>Short Films</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- short films -->
<div class="container">
	<div class="row">
		<div class="span12">
			<div class="row">

				<div class="thumbnail span4">
					<a href="l'apartment-406">
						<div class="apt-406-sprite">
							<span></span>
						</div>
					</a>
				</div>

				<div class="thumbnail span4">
					<a href="horse">
						<div class="horse-sprite">
							<span></span>
						</div>
					</a>
				</div>

				<div class="thumbnail span4">
					<a href="power-of-hands">
						<div class="power-of-hands-sprite">
							<span></span>
						</div>
					</a>
				</div>

	  		</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12">
			<div class="row">

				<div class="thumbnail span4">
					<a href="snapshot">
						<div class="snapshot-sprite">
							<span></span>
						</div>
					</a>
				</div>

				<div class="thumbnail span4">
					<a href="trapped">
						<div class="trapped-sprite">
							<span></span>
						</div>
					</a>
				</div>

				<div class="thumbnail span4">
					<a href="/short-films-2/forgotten">
						<div class="forgotten-sprite">
							<span></span>
						</div>
					</a>
				</div>

	  		</div>
		</div>
	</div>
</div>

<!-- end short films -->


<!-- pagination -->
<!-- <div class="container">
	<div class="row">
		<div class="span12">
			<div class="pagination pagination-right">
			  <ul>
			    <li class="active">
			      <a href="short-films">1</a>
			    </li>
			    <li><a href="/short-films-2">2</a></li>
			    <li><a href="/short-films-2">Next</a></li>
			  </ul>
			</div>
		</div>
	</div>
</div> -->
<!-- end pagination -->

<!-- footer -->
<?php include '../footer.php'; ?>
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

	<script type="text/javascript">
	$(document).ready(function() {
		$('.apt-406-sprite, .horse-sprite, .power-of-hands-sprite, .snapshot-sprite, .trapped-sprite, .forgotten-sprite').append('<span class="hover"></span>').each(function () {
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