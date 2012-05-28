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
			    <a href="#">Trapped</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>Trapped</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- video & -->
<div class="container">
	<div class="row">
		<div class="span12 video">
			<iframe src="http://player.vimeo.com/video/37145449?title=0&amp;byline=0&amp;portrait=0" width="940" height="530" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
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
			<p>A young woman receives a VHS tape from her recently abducted husband. Turning to a local Paranormal Expert for help, a failed attempt to locate him reveals that things are not what they seem, or are they? </p>

			<h2>Director's Statement</h2>
			<p>This film holds a special place in my heart. It was originally written and filmed during the 2010 48 Hour Film Festival in Greensboro, NC, my first try at the competition. After 2 days of hard work and creative challenges, we wrapped principal photography, but the edit proved to be tougher than expected which lead to our team missing the Sunday evening deadline. Regardless, we turned in a rough edit and were able to watch our film on the big screen, but that wasn't good enough. We weren't quite happy with the film so we decided to write and shoot a final scene and tighten up the edit. After a week or so, we had a finished short film that I was very proud of. Everyone did a great job on the film and it was an honor to be a part of the team. Big thanks to all the cast and crew and my good buddy Peter Alvanos of <a class="block-link"href="http://fabbird.com" title="Fabulous Bird" target="_blank">Fabulous Bird</a> for the soundtrack.</p>
		</div>	
		<div class="span6">
			<h2>Credits</h2>
			<ul class="credits unstyled star">
				<li><strong>Writer & Co-Producer</strong> - Lucas Butchart</li>
				<li><strong>Co-Producer/Director/DP/Editor</strong> - Seth Hall</li>
				<li><strong>Co-Producer & Craft</strong> - Elizabeth Hall</li>
				<li><strong>Music</strong> - Peter Alvanos</li>
				<br>
				<li><strong>Jess</strong> - Jess Speake</li>
				<li><strong>Martin Dockery</strong> - Billy Ingram</li>
				<li><strong>T.J.</strong> - T.J. Austin</li>
				<li><strong>Alien Hand</strong> - Elizabeth Hall</li>
				<li><strong>Alien Voice</strong> - Seth Hall</li>
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