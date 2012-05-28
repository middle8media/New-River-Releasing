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
			    <a href="/filmmakers">Filmmakers</a> <span class="divider">/</span>
			  </li>
			  <li class="active">
			    <a href="#">Les Butchart</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>Les Butchart</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- bio & links -->
<div class="container">
	<div class="row">
		<div class="span4 profile">
			<img src="/img/les-big.jpg">
		</div>
		<div class="span8 bio">
			<div class="row">
				<div class="span8">
				<h1><span class="star" style="font-size: 1em;">✪</span> About</h1>
					<p>Les Butchart is the co-founder of Highway 29 Motion Pictures, co-founder of New River Releasing and founder of Fugitive Poets Press, a digital publishing company. He has produced or co-produced three features: Esposito, Elephant Sighs and Swimming in a Lake of Fire, which he also wrote and directed. He wrote and directed The Hive, a web drama, and has authored fifteen screenplays, four novels and a book of poetry and short stories. He and Susan, his wife of more than 35 years, have three children and two grandchildren.</p>
				</div>
				<div class="span8">
					<div class="row">
						<div class="span3 links">
						<h1><span class="star" style="font-size: 1em;">✪</span> Links</h1>
							<ul class="unstyled">
								<li><a class="block-link" href="http://highway29motionpictures.com" title="Highway 29 Motion Pictures" target="_blank">HWY 29</a></li>
								<li><a class="block-link" href="http://fugitivepoetspress.com" title="Fugitive Poets Press" target="_blank">Fugitive Poets Press</a></li>
							</ul>
						</div>
						<div class="span5 social-networks">
						<h1><span class="star" style="font-size: 1em;">✪</span> Social Networks</h1>
							<ul>
								<a href="http://www.twitter.com/lesbutchart" target="_blank"><img src="/img/twitter-small.png" alt="Twitter" title="Les on Twitter"/></a>
								<a href="http://www.facebook.com/les.butchart" target="_blank"><img src="/img/facebook-small.png" alt="Facebook" title="Les on Facebook"/></a>
								<a href="http://www.linkedin.com/in/lesbutchart" target="_blank"><img src="/img/linkedin-small.png" alt="LinkedIn" title="Les on LinkedIn"/></a>
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
				<p>I graduated from UNC-Chapel Hill where I studied psychology and creative writing and majored in filmmaking. I have worked as an advertising copywriter, producer and creative director for over 30 years and have owned and operated a video production company, Umbra Strategic Media, since 1991. I also have a publishing company called Fugitive Poets Press.</p>

				<h1>2. How are you involved with New River Releasing?</h1>
				<p>I am a co-founder of New River Releasing. I co-produced/wrote/directed the feature film Swimming in a Lake of Fire and the web series The Hive.</p>

				<h1>3. Favorite films?</h1>
					<div class="row">
						<div class="span3">
							<ul class="unstyled ul2">
								<li> <span style="color:#4B99C4;">✪</span> True Grit</li>
								<li> <span style="color:#8BCA55;">✪</span> The Big Lebowski</li>
								<li> <span style="color:#FBF883;">✪</span> Godfather I & II</li>
								<li> <span style="color:#DB6353;">✪</span> Lord of the Rings</li>
								<li> <span style="color:#4B99C4;">✪</span> Breathless</li>
							</ul>
						</div>
						<div class="span3">
							<ul class="unstyled ul2">
								<li> <span style="color:#4B99C4;">✪</span> The 400 Blows</li>
								<li> <span style="color:#8BCA55;">✪</span> Day for Night</li>
								<li> <span style="color:#FBF883;">✪</span> To Kill a Mockingbird</li>
								<li> <span style="color:#DB6353;">✪</span> It's a Wonderful Life</li>
								<li> <span style="color:#4B99C4;">✪</span> Forrest Gump</li>
							</ul>
						</div>
					</div>

				<h1>4. Favorite filmmakers?</h1>
					<ul class="unstyled ul2">
						<li> <span style="color:#4B99C4;">✪</span> The Coen Brothers</li>
						<li> <span style="color:#8BCA55;">✪</span> Francois Truffaut</li>
						<li> <span style="color:#FBF883;">✪</span> Francis Ford Coppola</li>
						<li> <span style="color:#DB6353;">✪</span> Peter Jackson</li>
						<li> <span style="color:#4B99C4;">✪</span> Steven Spielberg</li>
						<li> <span style="color:#8BCA55;">✪</span> Robert Zemeckis</li>
					</ul>
		</div>

		<div class="span5 widget">
			<h2>Tweets</h2>
			<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
			new TWTR.Widget({
			  version: 2,
			  type: 'profile',
			  rpp: 3,
			  interval: 30000,
			  width: 'auto',
			  height: 'auto',
			  theme: {
			    shell: {
			      background: 'transparent',
			      color: '#ffffff'
			    },
			    tweets: {
			      background: 'transparent',
			      color: '#EEE7D6',
			      links: '#3480B3',
			    }
			  },
			  features: {
			    scrollbar: true,
			    loop: false,
			    live: false,
			    behavior: 'all'
			  }
			}).render().setUser('lesbutchart').start();
			</script>
		</div>

		<div class="span5 film-quote widget">
			<h2>Film Quotes</h2>
				<blockquote class="span11">
					<p>"The Dude Abides"</p>
					<br>
					<br>
						<p class="quote-person">The Dude</p>
						<p class="quote-film">The Big Lebowski</p>
				</blockquote>
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
	</script>

	<script>
		$('nav li').removeClass('active');
	</script>

<!-- end javascript -->


</body>