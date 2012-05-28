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
				<div class="span4">
					<div class="lof-sprite">
						<span></span>
					</div>
						<h1>Lake of Fire</h1>
				</div>
	<!-- 			    <div class="thumbnails2">
				      <a href="lake-of-fire"><img src="/img/lake-of-fire.jpg" alt="Lake of Fire Thumbnail"></a>
				      <h1>Lake of Fire</h1>
				      <p>In this Southern gothic tale straight from the heart of rural America, a young girl is pursued by the brother of the boy she murdered, after she was date-raped.</p>
				      <p><a class="btn btn-success" href="lake-of-fire">Read More »</a></p>
				    </div> -->

				<div class="span4">
				    <div class="thumbnails2 wrapper">
				      <!-- <a href="#"><img src="/img/harmonia.jpg" alt="Harmonia Thumbnail"></a> -->
					    <div class="harmonia-sprite">
							<span></span>
						</div>
				    <div class="ribbon-wrapper">
       					<div class="ribbon-red">In Progress</div>
				    </div>
				      <h1>Harmonia</h1>
			      
				      <!-- <p>A group of renegade musicians revive an ancient religion in a world where corporations and government rule with an iron fist. A world called Harmonia.</p> -->
				      <!-- <p><a class="btn btn-success" href="#">Read More »</a></p> -->
				    </div>
				</div>	
				<div class="span4">
				    <div class="thumbnails2 wrapper">
						<!-- <a href="../short-films/horse"><img src="/img/horse.jpg" alt="HORSE Thumbnail"></a> -->
					    <div class="horse-sprite">
							<span></span>
						</div>
					<div class="ribbon-wrapper">
       					<div class="ribbon-red">In Progress</div>
				    </div>
				    <h1>HORSE</h1>			    
						<!-- <p>This heartwarming family comedy is destined to be New River's <em>Christmas Story</em>. Follow its progress from development through distribution. You can check out the short film <a href="/short-films/horse" title="here">here.</a></p> -->
						<!-- <p><a class="btn btn-success" href="horse">Read More »</a></p> -->
					</div>​
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