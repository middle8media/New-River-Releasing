<!doctype html>
<html>
<head>
<?php include '../head.php'; ?>
	<script src="../js/mosaic.js"></script>
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
			    <a href="#">Filmmakers</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>Filmmakers</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- filmmakers -->
<div class="container">
	<div class="row">
		<div class="span12">
			<div class="row">

<!-- 				<div class="thumbnail span4">
					<a href="les-butchart">
						<div class="les-butchart-sprite">
							<span></span>
						</div>
					</a>
				</div> -->


				<div class="span4">
					<div class="hover-image">
						<img src="../img/les-big.jpg" alt="Les Butchart">
						<div class="caption">
							<span>Les Butchart</span>
							<p>Les Butchart is the co-founder of Highway 29 Motion Pictures, co-founder of New River Releasing, and founder of Fugitive Poets Press.</p>
							<a href="les-butchart" title="Click to Read More"><div class="read-more">Click to Read More</div></a>
						</div>	
					</div>
				</div>
 
<!-- 				<div class="thumbnail span4">
					<a href="seth-hall">
						<div class="seth-hall-sprite">
							<span></span>
						</div>
					</a>
				</div> -->

				<div class="span4">
					<div class="hover-image">
						<img src="../img/seth-big.jpg" alt="Seth Hall">
						<div class="caption">
							<span>Seth Hall</span>
							<p>Seth Hall is a writer, producer & director of independent film. He is also a co-founder of New River Releasing.</p>
							<a href="seth-hall" title="Click to Read More"><div class="read-more">Click to Read More</div></a>
						</div>	
					</div>
				</div>

				<div class="thumbnail span4">
					<a href="lucas-butchart">
						<div class="lucas-butchart-sprite">
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
					<a href="slade-blackburn">
						<div class="slade-blackburn-sprite">
							<span></span>
						</div>
					</a>
				</div>

	  		</div>
		</div>
	</div>
</div>
<!-- end filmmakers -->


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
		$('.les-butchart-sprite, .seth-hall-sprite, .lucas-butchart-sprite, .slade-blackburn-sprite').append('<span class="hover"></span>').each(function () {
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