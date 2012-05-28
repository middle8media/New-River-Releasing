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
			    <a href="#">David Gaadt</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>David Gaadt</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- bio & links -->
<div class="container">
	<div class="row">
		<div class="span4 profile">
			<img src="/img/gaadt-big.jpg">
		</div>
		<div class="span8 bio">
			<div class="row">
				<div class="span8">
				<h1><span class="star" style="font-size: 1em;">✪</span> About</h1>
					<p>David Gaadt is an illustrator and painter extraordinaire with over 40 years in the industry. His work in advertising and publishing across the globe have helped bring some of the finest campaigns and books to life. An early Gaadt piece is the iconic box art for the childhood classic <a href="/img/rockemsockem.jpg" rel="lightbox" title="Rock 'Em Sock 'Em Robots - Box Art by David Gaadt - 1963">Rock 'Em Sock 'Em Robots.</p>
				</div>
				<div class="span8">
					<div class="row">
						<div class="span8 social-networks">
						<h1><span class="star" style="font-size: 1em;">✪</span> Social Networks</h1>
							<ul>
								<a href="http://www.linkedin.com/pub/gaadt-david/32/710/274" target="_blank"><img src="/img/linkedin-small.png" alt="LinkedIn" title="David on LinkedIn"/></a>
								<a href="http://www.facebook.com/profile.php?id=1402999376" target="_blank"><img src="/img/facebook-small.png" alt="Facebook" title="David on Facebook"/></a>
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
				<p>I was born in Erie, PA and began my exciting journey into art with four years of intense training in cast and figure drawing, color study and landscape painting while attending a four year technical school. I continued my formal training and graduated from the prestigious Columbus College of Art and Design in 1968. Further studies included the works of the Old Masters, Leonardo da Vinci, Michelangelo, Vermeer, Velazquez, John Singer Sargent and private workshops with John Howard Sanden, Michael del Priore and Daniel Green. I worked at two studios in Atlanta, GA before starting my own business in 1972. I have worked with a variety of ad agencies and publishers all across the world.</p>

				<h1>2. How are you involved with New River Releasing?</h1>
				<p>At New River Releasing I help anchor the art department. Film posters, DVD packaging, storyboards, conceptual drawings, production design...you name it and I do it.</p>

				<h1>3. What artists inspire you the most?</h1>
					<ul class="unstyled ul2">
						<li> <span style="color:#FBF883;">✪</span> John Singer Sargent</li>
						<li> <span style="color:#DB6353;">✪</span> Mucha</li>
					</ul>

				<h1>4. Favorite films?</h1>
					<div class="row">
						<div class="span3">
							<ul class="unstyled ul2">
								<li> <span style="color:#4B99C4;">✪</span> Indiana Jones</li>
								<li> <span style="color:#8BCA55;">✪</span> Alien</li>
								<li> <span style="color:#FBF883;">✪</span> Avatar</li>
							</ul>
						</div>
					</div>

				<h1>5. Favorite filmmakers?</h1>
					<ul class="unstyled ul2">
						<li> <span style="color:#DB6353;">✪</span> Spielberg</li>
						<li> <span style="color:#4B99C4;">✪</span> James Cameron</li>
					</ul>
		</div>

		<div class="span5 film-quote widget">
			<h2>Film Quotes</h2>
				<blockquote class="span11">
					<p>"Frankly, my dear, I don't give a damn."</p>
					<br>
					<br>
						<p class="quote-person">Rhett Butler</p>
						<p class="quote-film">Gone with the Wind</p>
				</blockquote>
		</div>

		<div class="span5 widget">
			<h2>Examples</h2>
 			<div class="carousel">
			  <div class="carousel-inner">
	             <div class="active item">
	               <img src="/img/gaadt-slide1.jpg">
	             </div>
	             <div class="item">
	               <img src="/img/gaadt-slide2.jpg">
	             </div>
	             <div class="item">
	               <img src="/img/gaadt-slide3.jpg">
	             </div>
	             <div class="item">
	               <img src="/img/gaadt-slide4.jpg">
	             </div>
	             <div class="item">
	               <img src="/img/gaadt-slide5.jpg">
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

	<script type="text/javascript" src="/js/prototype.js"></script>
	<script type="text/javascript" src="/js/scriptaculous.js?load=effects,builder"></script>
	<script type="text/javascript" src="/js/lightbox.js"></script>

<!-- end javascript -->


</body>