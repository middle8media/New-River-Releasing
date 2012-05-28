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
			    <a href="#">Snapshot</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>Snapshot</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- video & -->
<div class="container">
	<div class="row">
		<div class="span12 video">
			<iframe src="http://player.vimeo.com/video/38491102?title=0&amp;byline=0&amp;portrait=0" width="940" height="530" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
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
		<div class="span6">
			<h2>Synopsis</h2>
			<p>A young woman discovers a lost heirloom that brings her mystery and terror</p>
		</div>
		<div class="span6">
			<h2>Credits</h2>
			<ul class="credits unstyled star">
				<li><strong>Story</strong> - Steven Oklesh</li>
				<li><strong>Writer</strong> - Steven Oklesh, Lucas Butchart, Les Butchart</li>
				<li><strong>Producer</strong> - Rosie Butchart</li>
				<li><strong>DP, Director, Editor</strong> - Lucas Butchart, Les Butchart</li>
				<br>
				<li><strong>Laura Brown</strong> - Rosie Butchart</li>
				<li><strong>The Farmer</strong> - Billy Ingram</li>
				<li><strong>Malcomb</strong> - Adam Young</li>
				<li><strong>The Ghost</strong> - Madalynn Clapp</li>
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