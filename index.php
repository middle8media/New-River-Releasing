<!doctype html>
<html>
<head>
<?php include 'head.php'; ?>
	
	<link rel="stylesheet" href="/css/slider.css" type="text/css">
	<script src="/js/ios-label-fix.js"></script>

	<script type="text/javascript">
	  $(window).load(function() {
	    $('.flexslider').flexslider();
	  });
	</script>

	<script src="http://www.google.com/jsapi?" type="text/javascript"></script>

</head>

<body>
<!-- navigation -->
<?php include 'nav.php'; ?>
<!-- end navigation -->



<!-- header -->
<?php include 'header.php'; ?>
<!-- end header -->


<!-- The Slider -->
<div class="container">
	<div class="row">
		<div class="span12">
			<article id="slider">

				<input class="radio" checked="" type="radio" name="slider" id="slide1" selected="false">
				<input class="radio" type="radio" name="slider" id="slide2" selected="false">
				<input class="radio" type="radio" name="slider" id="slide3" selected="true">
				<input class="radio" type="radio" name="slider" id="slide4" selected="true">
				<input class="radio" type="radio" name="slider" id="slide5" selected="true">

				<div id=slides>
				
					<div id=overflow>
					
						<div class=inner>
						
							<article>
								<a href="feature-films/lake-of-fire"><img src="img/lof-home-slide.jpg" /></a>
							</article>
							
							<article>
								<!-- <div class="info"><h3>Mountain Fort</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div> -->
								<a href="http://moviesamongfriends.ning.com" target="_blank"><img src="img/maf-home-slide.jpg" /></a>
							</article>
							
							<article>
								<!-- <div class="info"><h3>Mountain Outpost</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div> -->
								<a href="web-series"><img src="img/hive-home-slide.jpg" /></a>
							</article>
							
							<article>
								<!-- <div class="info"><h3>Cliffs</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div> -->
								<a href="short-films/horse"><img src="img/horse-home-slide.jpg" /></a>
							</article>
							
							<article>
								<a href="#"><img src="img/cinema-cities-home-slide.gif" /></a>
							</article>
							
						</div> <!-- .inner -->
						
					</div> <!-- #overflow -->
				
				</div> <!-- #slides -->


				<!-- Controls and Active Slide Display -->

				<div id="controls">

					<label for="slide1"></label>
					<label for="slide2"></label>
					<label for="slide3"></label>
					<label for="slide4"></label>
					<label for="slide5"></label>
				
				</div> <!-- #controls -->
				
				<div id="active">

					<label for="slide1"></label>
					<label for="slide2"></label>
					<label for="slide3"></label>
					<label for="slide4"></label>
					<label for="slide5"></label>
				</div> <!-- #active -->
				
				<div id="slide-caption">
					<article>
						<div class="slide-caption">✪ Click Slide to Read More ✪</div>
					</article>

					<article>
						<div class="slide-caption">✪ Click Slide to Join MAF ✪</div>
					</article>

					<article>
						<div class="slide-caption">✪ Click Slide to Read More ✪</div>
					</article>

					<article>
						<div class="slide-caption">✪ Click Slide to Watch the Short Film ✪</div>
					</article>
					
					<article>
						<div class="slide-caption">✪ Click Slide for a FREE PDF ✪</div>
					</article>
				</div>


			</article>			
		</div>
	</div>
</div>
<!-- end main slider -->


<!-- bottom border -->
<div class="container">
	<div class="row">
		<div class="span12 bottom-border" style="margin-top:30px;">
		</div>
	</div>
</div>
<!-- end bottom border -->


<!-- info boxes -->
<div class="container">
	<div class="row">
		<div class="span12 info-box">
			<div class="row">
				<div class="span8">
					<div class="row">
						<div class="span4">
							<img src="img/tweets.png" alt="Twitter" style="float:left; padding-right:15px;"><h2>Latest Tweets</h2>
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
								      color: '#EEE7D6'
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
								    live: true,
								    behavior: 'all'
								  }
								}).render().setUser('newriver_nc').start();
								</script>
						</div>
						<div class="span4">
							<img src="img/posts.png" alt="Blog Posts" style="float:left; padding-right:10px; margin-left: -9px;"><h2>Latest Posts</h2>
								<div id="recentPosts">
								</div>
						</div>
						

						<!-- bottom border -->
						<div class="span8">
							<div class="container">
								<div class="row">
									<div class="span8 bottom-border">
									</div>
								</div>
							</div>	
						</div>
						<!-- end bottom border -->


						<div class="span8">
							<div class="row">
								<div class="span4">
									<img src="img/marketing-small.png" alt="Marketing Icon" style="float:left; padding-right:15px;"><h2>Marketing</h2>
									<p>For every film we produce or represent, we conduct in depth focus groups, produce <em>High Art</em> marketing materials, develop transmedia strategies & book select theaters.<br><a href="distribution" title="Click to Read More" style="font-size:15px;">✪ Read More ✪</a></p>
								</div>
								<div class="span4">
									<img src="img/distribution.png" alt="Distribution Icon" style="float:left; padding-right:15px;"><h2>Distribution</h2>
									<p>Operating under a <em>filmmaker friendly philosophy</em>, our distribution model encompasses select theatrical screenings, VOD (Video on Demand), DVD releases, online venues, TV, and foreign sales.<br><a href="distribution" title="Click to Read More" style="font-size:15px;">✪ Read More ✪</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="span4 creators">
					<div class="row">
						<div class="span4">
							<img src="img/filmmakers.png" alt="Filmmakers" style="float:left; padding-right:10px; margin-left: -9px;"><h2>Filmmakers</h2>
							<p>Writers, Producers, Directors, Photographers & Editors.<br><a href="filmmakers" title="Click for Filmmakers" style="font-size:15px;">✪ Read More ✪</a></p>
						</div>
						<div class="span4">
							<img src="img/composers.png" alt="Composers" style="float:left; padding-right:10px; margin-left: -9px;"><h2>Composers</h2>
							<p>Musicians, Singers, Songwriters, Arrangers & Producers.<br><a href="composers" title="Click for Composers" style="font-size:15px;">✪ Read More ✪</a></p>
						</div>
						<div class="span4">
							<img src="img/artists.png" alt="Artists" style="float:left; padding-right:10px; margin-left: -9px;"><h2>Artists</h2>
							<p>Painters, Illustrators, Sculptors, Makeup Artists & Visionaries.<br><a href="artists" title="Click for Artists" style="font-size:15px;">✪ Read More ✪</a></p>
						</div>
						<div class="span4">
							<img src="img/maf.png" alt="Artists" style="float:left; padding-right:10px; margin-left: -5px;"><h2>MAF</h2>
							<p><em>Movies Among Friends, </em>a do-it-yourself approach to making and marketing great hand-crafted films.<br><a href="http://moviesamongfriends.ning.com/" title="Join Movies Among Friends" target="_blank" style="font-size:15px;">✪ Join Now ✪</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end info boxes -->


<!-- bottom border -->
<div class="container">
	<div class="row">
		<div class="span12 bottom-border" style="margin-top:30px;">
		</div>
	</div>
</div>
<!-- end bottom border -->


<!-- icons -->
<div class="container">
	<div class="row">
		<div class="span12" style="padding-top:9px;">
			<p style="text-align:center;">✪  <i>Click the icons below to watch some of our films</i>  ✪</p>
			<div class="row home-icons">
				<div class="span4 pull-left">
					<h2 style="margin-left:5px;">Feature Films</h2>
					<a href="feature-films" alt="Feature Films" title="Feature Films"><img src="/img/funding.png"></a>
				</div>
				<div class="span4">
					<h2>Short Films</h2>
					<a href="short-films" alt="Short Films" title="Short Films"><img src="/img/digital.png"></a>
				</div>
				<div class="span4 pull-right">
					<h2>Web Series</h2>
					<a href="web-series" alt="Web Series" title="Web Series"><img src="/img/talent.png"></a>
				</div>
			</div>		
		</div>
	</div>
</div>
<!-- end icons -->


<!-- bottom border -->
<!-- <div class="container">
	<div class="row">
		<div class="span12 bottom-border" style="margin-top:30px;">
		</div>
	</div>
</div> -->
<!-- end bottom border -->


<!-- testimonial & press -->
<!-- <div class="container">
	<div class="row">
		<div class="span4">
			<h2>Testimonial #1</h2>
			<p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis mollis, est non  --><!-- commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
		</div>
		<div class="span4">
			<h2>Testimonial #2</h2>
			<p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
		</div>
		<div class="span4">
			<h2>Testimonial #3</h2>
			<p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
		</div>
	</div>
</div> -->
<!-- end testimonial & press -->


<!-- footer -->
<?php include 'footer.php'; ?>
<!-- end footer -->


<!-- javascript -->

	<script>
		$('.dropdown-toggle').dropdown()
		$(".collapse").collapse()
	</script>

	<script>
		google.load("feeds", "1");
	     
	    function OnLoad() {
	      var feedControl = new google.feeds.FeedControl();
	     	feedControl.setNumEntries(2);
	      feedControl.addFeed("http://newriverreleasing.tumblr.com/rss");
	     
	      feedControl.draw(document.getElementById("recentPosts"));
	    }
	     
	    google.setOnLoadCallback(OnLoad);
	</script>

<!-- end javascript -->

</body>