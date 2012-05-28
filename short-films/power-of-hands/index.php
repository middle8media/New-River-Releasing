<!doctype html>
<html>
<head>
<?php include '../../head.php'; ?>
</head>

<body>
<!-- navigation -->
<?php include '../../nav.php'; ?>
<!-- end navigation -->


<!-- header -->
<?php include '../../header.php'; ?>
<!-- end header -->


<!-- page title -->
<div class="container">
	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
			  <li>
			    <a href="/">Home</a> <span class="divider">/</span>
			  </li>
			  <li>
			    <a href="/short-films">Short Films</a> <span class="divider">/</span>
			  </li>
			  <li class="active">
			    <a href="#">Power of Hands</a>
			  </li>
			</ul>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>Power of Hands</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- video & -->
<div class="container">
	<div class="row">
		<div class="span12 video">
			<iframe src="http://player.vimeo.com/video/38492226?title=0&amp;byline=0&amp;portrait=0" width="940" height="530" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		</div>
	</div>
</div>
<!-- end video & -->

<!-- bottom border -->
<div class="container">
	<div class="row">
		<div class="span12 bottom-border">
		</div>
	</div>
</div>
<!-- end bottom border -->

<!-- synopis & credits -->
<div class="container">
	<div class="row">
		<div class="span7">
			<h2>Synopsis</h2>
			<p>a short film by Matt Nunn</p>

			<!-- <h2>Director's Statement</h2>
			<p></p> -->
		</div>
		<div class="span5">
			<h2>Credits</h2>
			<ul class="credits unstyled star">
				<li><strong>Director</strong> - Matt Nunn</li>
				<li><strong>Executive Producer</strong> - Tim Carter</li>
				<li><strong>Executive Producer</strong> - Stanley Hollenbach</li>
				<li><strong>Executive Producer</strong> - Andrew Pickett</li>
				<li><strong>Music</strong> - Moby</li>
				<br>
				<span><strong>Starring:</strong></span>
				<li>Mary Suzanne Nunn</li>
				<li>Allison Doucette</li>
				<li>Joseph Doucette</li>
			</ul>			
		</div>
	</div>
</div>
<!-- end synopis & credits -->

<!-- footer -->
<?php include '../../footer.php'; ?>
<!-- end footer -->


<!-- javascript -->

	<script src="/js/jquery.fitvids.js"></script>

	<script>
		$('li').click(function(){
			$('li.active').removeClass('active');
				$(this).addClass('active');
	});
	</script>

	<script type="text/javascript">
		$(".video").fitVids();
	</script>

	<script>
		$('.dropdown-toggle').dropdown()
		$(".collapse").collapse()
		$('.carousel').carousel()
	</script>


<!-- end javascript -->


</body>