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
			    <a href="#">Forgotten</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>Forgotten</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- video & -->
<div class="container">
	<div class="row">
		<div class="span12 video">
			<iframe width="auto" height="auto" src="http://www.youtube.com/embed/FeyFrHcoSQc?rel=0&wmode=opaque" frameborder="0" allowfullscreen></iframe>
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
		<div class="span8">
			<h2>Synopsis</h2>
			<p>This is an experimental film shot with the intention of being a longer, complete piece. It's totally watchable as-is, but shooting has not wrapped on it yet. Filming took place and will take place in Paris. A man wakes up in an apartment not his own, in a life not his own. He spends the day wandering Paris, trying to find himself. He's given several clues along the way that point to his real identity.</p>

			<h2>Director's Statement</h2>
			<p>"Forgotten" is a collaborative experiment in character and improvisation. Basically I, the director, just turned the camera on and let Jérémie, the actor, do his own thing. We talked about where the story could go as we went along, and right now we have thought of an ending that we will be shooting very soon, and the ending will tie the loose ends together. Forgotten is faintly influenced by Jim Jarmusch's films, especially Limits of Control.</p>
		</div>
		<div class="span4">
			<h2>Credits</h2>
			<ul class="credits unstyled star">
				<li><strong>Director</strong> - Lucas Butchart</li>
				<li><strong>Man</strong> - Jérémie Larue</li>
				<li><strong>Woman</strong> - Aurelie Charrelier</li>
			</ul>
			<h2>Photos</h2>
			<div class="carousel">
			  <!-- Carousel items -->
				<div class="carousel-inner">
	        	<div class="active item">
                	<img src="/img/forgotten-slide1.jpg">
              	</div>
              	<div class="item">
                	<img src="/img/forgotten-slide2.jpg">
              	</div>
              	<div class="item">
                	<img src="/img/forgotten-slide3.jpg">
              	</div>
              	<div class="item">
                	<img src="/img/forgotten-slide4.jpg">
              	</div>
				</div>			
			</div>
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