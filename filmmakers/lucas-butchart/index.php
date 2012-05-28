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
			    <a href="#">Lucas Butchart</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>Lucas Butchart</span>
		</div>				
	</div>
</div>
<!-- end page title -->


<!-- bio & links -->
<div class="container">
	<div class="row">
		<div class="span4 profile">
			<img src="/img/lucas-big.jpg">
		</div>
		<div class="span8 bio">
			<div class="row">
				<div class="span8">
				<h1><span class="star" style="font-size: 1em;">✪</span> About</h1>
					<p>Lucas Butchart is a writer, producer & photographer. He recently wrote the script for Saints at the River, based on the novel by Ron Rash.</p>
				</div>
				<div class="span8">
					<div class="row">
						<div class="span3 links">
						<h1><span class="star" style="font-size: 1em;">✪</span> Links</h1>
							<ul class="unstyled">
								<li><a class="block-link" href="http://www.jlbphotograph.com" title="JBL Photography" target="_blank">Lucas's Photography</a></li>
							</ul>
						</div>
						<div class="span5 social-networks">
						<h1><span class="star" style="font-size: 1em;">✪</span> Social Networks</h1>
							<ul>
								<a href="http://www.twitter.com/lucasbutchart" target="_blank"><img src="/img/twitter-small.png" alt="Twitter" title="Lucas on Twitter"/></a>
								<a href="http://www.facebook.com/lucasbutchart" target="_blank"><img src="/img/facebook-small.png" alt="Facebook" title="Lucas on Facebook"/></a>
								<a href="http://www.linkedin.com/pub/lucas-butchart/19/895/268" target="_blank"><img src="/img/linkedin-small.png" alt="LinkedIn" title="Lucas on LinkedIn"/></a>
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
				<p>I grew up on a film set. My dad is a director and producer, so I grew up loving movies. I studied literature and writing under Ron Rash whose novel I coincidentally had the opportunity to adapt for the screen years later, which is now a Highway 29 Motion Pictures production. My passion for film comes from my passion for storytelling, and the influence of the great American filmmakers and writers, as well as some artists from all parts of the world.</p>

				<h1>2. How are you involved with New River Releasing?</h1>
				<p>My job with New River Releasing will be writing original film scripts, helping to revise existing scripts, and to produce and possibly one day direct films.</p>

				<h1>3. Favorite filmmakers?</h1>
				<p class="last-child">I could watch any Coen Brother's film everyday because they do such a great job telling a story, including original dialogue, characters and stories. Everytime I rewatch one of their films, I feel like I'm watching it for the first time. A few of my favorite filmmakers are...</p>				
					<ul class="unstyled ul2">
						<li> <span style="color:#4B99C4;">✪</span> Alexander Payne</li>
						<li> <span style="color:#8BCA55;">✪</span> The Coen Brothers</li>
						<li> <span style="color:#FBF883;">✪</span> Ken Loach</li>
						<li> <span style="color:#DB6353;">✪</span> Jim Jarmusch</li>
						<li> <span style="color:#4B99C4;">✪</span> Martin Scorsese</li>
						<li> <span style="color:#8BCA55;">✪</span> P.T. Anderson</li>
					</ul>
				<h1>4. Any favorite film quotes?</h1>
					<p>I don't have any favorite film quotes....I watch a lot of movies and have some favorite films and directors, but not really any quotes. One I remember from a recently-watched film is "You shouldn't drink and bake," awkwardly delievered by Arnold Schwartzeneger in "The Contract".</p>
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
			}).render().setUser('LucasButchart').start();
			</script>
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