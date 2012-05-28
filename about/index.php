<!doctype html>
<html>
<head>
<?php include '../head.php'; ?>
</head>

<body>
<!-- navigation -->
<?php include '../nav.php'; ?>
<!-- end navigation -->


<!-- header -->
<?php include '../header.php'; ?>
<!-- end header -->


<!-- page title -->
<div class="container">
	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
			  <li>
			    <a href="/">Home</a> <span class="divider">/</span>
			  </li>
			  <li class="active">
			    <a href="#">About Us</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>About Us</span>
		</div>
	</div>
</div>
<!-- end page title -->

<div class="container">
	<div class="row">
		<div class="span12">
			<p><span style="font-family: 'Governor', sans-serif !important;">NEW RIVER RELEASING COMPANY</span> is a web-based motion picture studio. That means we have a comprehensive set of capabilities to offer, from film funding to production and marketing.  We network with new filmmakers, actors, and others through this website and through <a href="http://moviesamongfriends.com" title="Join Movies Among Friends" target="_blank">MoviesAmongFriends.com</a>, our own social network. Our mission as a distributor is to empower a new generation of filmmakers to produce quality films by creating a mutually profitable marketing partnership with them.</p>

			<p class="blockquote-left" style="float:none; width:100%; margin-bottom:30px;">By focusing on digital solutions for film funding, production and distribution, <i>New River is changing the paradigm for independent film.</i></p>

			<p style="padding:0px;"><span style="color:#DB6353;">✪</span> <i>New River’s Micro-Budget Film Fund, a film package of four micro-budget features with an average budget of $250,000, will be offered online as a crowdfunded investment in the first quarter of 2013</i> <span style="color:#DB6353;">✪</span><!-- Check out the films in our first Micro-Budget Film Fund. --></p>
			
		</div>
	</div>
</div>




<!-- bottom border -->
<div class="container">
	<div class="row">
		<div class="span12 bottom-border">
		</div>
	</div>
</div>
<!-- end bottom border -->

<!-- main -->
<div class="container">
	<div class="row">
		<div class="span8">

			<h2>History</h2>
			<p>New River is the effort of a half dozen filmmakers who wanted to create a dedicated distribution company for their micro-budget feature films and shorts.</p>

			<p class="blockquote-left">Founded by a group of filmmakers seeking to do leading edge, ethically sound films, New River embraces both traditional and new channels of distribution.</p>
			
			<p>We know that a lot of filmmakers share our vision for what’s possible in this new era of digital filmmaking and distribution, because many of us have been frustrated by the intransigence of the old system. This frustration is nothing new, but what is new is that digital distribution is creating new ways of profiting from our films.</p>

			<P>What makes New River different, however, is that the filmmakers involved have produced enough features to know the potential of micro-budget production. We also know that the marketplace is skewed toward films that don’t really interest us. What does interest us? Great stories and great films made from those stories. At New River, screenwriting is in our DNA, and we’ve developed a library of compelling scripts for both features and web dramas to help fuel the growth of our company.</p>

			<h2>Philosophy</h2>
			<p>Back in 1977, one of New River’s founders, Les Butchart, attended the Independent Feature Film Market in NYC, where hundreds of features and trailers were screened. The shock he experienced at seeing the lack of quality of many of those works made him realize that independent filmmaking is not an egalitarian enterprise, particularly in terms of what is worth marketing and what is not.</p>

			<p class="blockquote-right">We embrace film as an art form, while recognizing that a film must be engaging and commercial in order for a filmmaker to prosper.</p>

			<p>That's why quality is so dear to us. Out of respect for the film medium and out of a desire to encourage a new generation of great filmmaking, another American “New Wave” of artistic films with the power to move people, New River is searching out filmmakers with unique visions for what’s possible with narrative filmmaking in the digital age.</p>

			<p>New River is a web-based company, meaning that we are leveraging the web for all its worth and all it can do for filmmakers and their fans. Our strategy is to combine an online showcase with distribution activities in virtually all markets for films, including strategic domestic and foreign theatrical screenings, VOD, digital outlets, television, foreign and DVD.</p>	

		</div>	

 		<div class="span4 widget">
			<h2>Follow Us</h2>
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
			}).render().setUser('newriver_nc').start();
			</script>
		</div>
		<div class="span4 maf widget">
			<h2>Join Us</h2>
			<a href="http://moviesamongfriends.ning.com/" title="Movies Among Friends" target="_blank"><img src="/img/maf.jpg"></a>
			<p style="font-size:100%; padding-bottom:0px;"><strong>a do-it-yourself approach to making and marketing great hand-crafted films.</strong></p>
		</div>

		<div class="span4 widget">
			<h2>Like Us</h2>
			<fb:fan profile_id="322785804431172" href="http://www.facebook.com/newriverreleasing" width="292" show_faces="true" stream="true" header="false" css="http://www.newriverreleasing.com/css/facebook-widget.css"></fb:fan>

			<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=235612923173961";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
		</div>
	</div>
</div>
<!-- end main -->

		
<!-- footer -->
<?php include '../footer.php'; ?>
<!-- end footer -->


<!-- javascript -->
	<script>
		$('.dropdown-toggle').dropdown()
		$(".collapse").collapse()
	</script>

<!-- end javascript -->


</body>