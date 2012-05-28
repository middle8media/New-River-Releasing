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
			    <a href="/artists">Artists</a> <span class="divider">/</span>
			  </li>
			  <li class="active">
			    <a href="#">Joh Harp</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>Joh Harp</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- bio & links -->
<div class="container">
	<div class="row">
		<div class="span4 profile">
			<img src="/img/joh-big.jpg">
		</div>
		<div class="span8 bio">
			<div class="row">
				<div class="span8">
				<h1><span class="star" style="font-size: 1em;">✪</span> About</h1>
					<p>Joh Harp is a hybrid of an illusionist and a mad scientist.  Whether created chemically or through illusion, he brings to life every prop, set, character or creature you could imagine.</p>
				</div>
				<div class="span8">
					<div class="row">
						<div class="span8 social-networks">
						<h1><span class="star" style="font-size: 1em;">✪</span> Social Networks</h1>
							<ul>
								<a href="http://www.imdb.com/name/nm3716371/" target="_blank"><img src="/img/imdb-small.png" alt="imdb" title="Joh on IMDB"/></a>
								<a href="http://facebook.com/johHarpFX" target="_blank"><img src="/img/facebook-small.png" alt="facebook" title="Joh on Facebook"/></a>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>
<!-- end bio & links -->

<!-- bottom border -->
<div class="container">
	<div class="row">
		<div class="span12 bottom-border">
		</div>
	</div>
</div>
<!-- end bottom border -->

<!-- questions & sidebar-->
<div class="container">
	<div class="row">
		<div class="span7 questions">
				<h1>1. What is your background?</h1>
				<p>I'm a Special Effects Make-up artist, working out of High Point, NC. I've been a professional Special Effects artist for 11 years now. I work primarily on horror films, I do love horror films but I'm also interested in other genres. I feel there is a proper time and place for every kind of make-up effect. I have, in my professional 11 years, assisted in the designed and creation of costumes sold to Disney Land in Hong Kong. I've done body painting, make-up for print photoshoots, music videos, short films, theatrical performances, and feature films. I've also had the opportunity to do set design and set construction as well as costume design and construction. In my lab, I do sculpture, mold making, casting, painting and heair work. I can make prosthetics, props, full body costumes, masks and more. I'm looking to expand my lab in order to take on larger projects. I have a core group of assistants who help me on and off location. </p>

				<h1>2. How are you involved with New River Releasing?</h1>
				<p>I'm new to New River Releasing and anxious to see where it leads.</p>

				<h1>3. Favorite films?</h1>
					<div class="row">
						<div class="span7">
							<ul class="unstyled ul2">
								<li> <span style="color:#4B99C4;">✪</span> House on Hauntedhill (Vincent Price/William Castle)</li>
								<li> <span style="color:#8BCA55;">✪</span> Cemetary Man</li>
								<li> <span style="color:#FBF883;">✪</span> The Howling</li>
								<li> <span style="color:#DB6353;">✪</span> House of 1,000 Corpses</li>
								<li> <span style="color:#4B99C4;">✪</span> Moulin Rouge</li>
							</ul>
						</div>
					</div>

				<h1>4. Favorite filmmakers & make-up artists?</h1>
				<div class="row">
				<div class="span3">
					<ul class="unstyled ul2">
						<li> <span style="color:#4B99C4;">✪</span> Tim Burton</li>
						<li> <span style="color:#8BCA55;">✪</span> Rob Zombie</li>
						<li> <span style="color:#FBF883;">✪</span> William Castle</li>
					</ul>
				</div>
				<div class="span4">		
					<ul class="unstyled ul2">
						<li> <span style="color:#DB6353;">✪</span> Rob Bottin</li>
						<li> <span style="color:#4B99C4;">✪</span> Dick Smith (The Godfather)</li>
					</ul>
				</div>
				</div>
		</div>
		
		<div class="span5 film-quote widget">
			<h2>Film Quotes</h2>
				<blockquote class="span11">
					<p>"Who knows if the rest of the world even exists."</p>
					<br>
					<br>
						<p class="quote-film">Cemetary Man</p>
					<br>
					<br>
					<br>
					<br>	
					<p>"Stop killing the dead, the dead are mine."</p>
					<br>
					<br>
						<p class="quote-film">Cemetary Man</p>
				</blockquote>
		</div>

		<div class="span5 widget">
			<h2>Examples</h2>
			<div class="carousel widget">
				  <!-- Carousel items -->
				<div class="carousel-inner">
	              <div class="active item">
	                <img src="/img/joh-slide1.jpg">
	              </div>
	              <div class="item">
	                <img src="/img/joh-slide2.jpg">
	              </div>
	              <div class="item">
	                <img src="/img/joh-slide3.jpg">
	              </div>
	              <div class="item">
	                <img src="/img/joh-slide4.jpg">
	              </div>
	              <div class="item">
	                <img src="/img/joh-slide5.jpg">
	              </div>
				</div>
			</div>	
		</div>
	</div>	
</div>
<!-- end questions & sidebar -->


<!-- footer -->
<?php include '../../footer.php'; ?>
<!-- end footer -->


<!-- javascript -->
	<script>
		$('.dropdown-toggle').dropdown()
		$(".collapse").collapse()
		$('.carousel').carousel()		
	</script>

	<script>
		$('nav li').removeClass('active');
	</script>

<!-- end javascript -->


</body>