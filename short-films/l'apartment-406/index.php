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
			    <a href="#">l'apartment 406</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>l'apartment 406</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- video & -->
<div class="container">
	<div class="row">
		<div class="span12 video">
			<iframe src="http://player.vimeo.com/video/37254617?title=0&amp;byline=0&amp;portrait=0" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
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
			<p>A young woman and her father get wrapped up in an assassination plan and attempt to turn it to their advantage.</p>

			<h2>Director's Statement</h2>
			<p>As with every 48-hour film project there's no time to think a lot about your directing, so you do it on impulse. That's one of the reasons I love working on them. So often, as you prepare to shoot the next scene, there's a spontaneous collaboration between the actors, cinematographer, director and any else standing around. Working with Matt Nunn and Lucas Butchart and the rest of our crew for this effort, directing came easy. Matt shot the opening on his own, directed it himself. He's a fine director and some of his other films are showcased on the New River site, too. When it came time to shoot those outdoor bits, we literally all walked around the neighborhood, found nice spots, and shot the bits. At one point, I had to be the bum, a part I am well-adapted for, and so Matt and Lucas made sure that little bit looked right. This was our third 48-Hour Film and we won a lot of awards with it. It impressed enough people to help us raise money for feature films</p>
		</div>
		<div class="span5">
			<h2>Credits</h2>
			<ul class="credits unstyled star">
				<li><strong>Directors</strong> - Les Butchart, Lucas Butchart</li>
				<li><strong>Producer</strong> -  Rosie Butchart</li>
				<li><strong>DP</strong> - Matt Nunn</li>
				<li><strong>Writers</strong> - Amber Delsarto, Rosie Butchart, Lucas Butchart, Les Butchart, Steven Oklesh, Matt Nunn</li>
				<br>
				<li><strong>Leon Tuomi</strong> - Nazereth Dairian</li>
				<li><strong>Samantha Tuomi</strong> - Katie Hendrix</li>
				<li><strong>Narrator</strong> - Achlai Wallace</li>
				<li><strong>Simon Louis</strong> - Billy Ingram</li>
				<li><strong>Old Friend</strong> - Mark Robertson</li>
				<li><strong>The Courier</strong> - Nick White</li>
				<li><strong>The Real Assassin</strong> - Matt Nunn</li>
				<li><strong>The Bum</strong> - Les Butchart</li>
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