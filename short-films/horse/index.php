<!doctype html>
<html>
<head>
<?php include '../../head.php'; ?>
	<script type="text/javascript" src="/js/prototype.js"></script>
	<script type="text/javascript" src="/js/scriptaculous.js?load=effects,builder"></script>
	<script type="text/javascript" src="/js/lightbox.js"></script>
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
			    <a href="#">HORSE</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>HORSE</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- video & -->
<div class="container">
	<div class="row">
		<div class="span12 video">
			<iframe src="http://player.vimeo.com/video/37152130?title=0&amp;byline=0&amp;portrait=0" width="940" height="530" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
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
			<p>HORSE is the redemptive story of a down and out father who must face his greatest fear by entering a neighborhood father/son HORSE tournament.</p>

			<h2>Director's Statement</h2>
			<p>I believe in filmmaking as a collaboration of community, a way for everyone involved to use their gifts and talents to play an integral part in the story telling process. I am focused on making high quality films on a micro-budget, while telling the best story possible, making it more likely to recoup costs and investments, as well as turn a profit. My films are designed to not only entertain, but challenge the viewer to look within and grow with compassion & love.  </p>
			<p>I believe HORSE was successful and has potential for continued success. It brought together a community all committed to doing their part, which allowed us to produce the film on a micro-budget. The theme of fatherlessness is one worth exploring and it's universal reach has strong potential to challenge the audience and evoke change within. I believe this will allow HORSE to reach a wide audience and recoup costs. I also believe the short film has room to grow and can be turned into a feature. It is my goal to present our sold out Greensboro premiere, an online presence and the film itself to potential investors to raise the budget needed for the feature length version.  </p>
			<p>It was an honor to work side by side with my wife Elizabeth on this film. Her role as producer (and a variety of other titles) proved invaluable and her commitment and energy, as well as that of our amazing cast and crew, made this film a success.  </p>
			<h2>"From $15,000 to $800"</h2>
			<p>When we originally budgeted for HORSE, our total came to $15,000. This was to cover every aspect of the production and fulfilled our desire to pay our cast and crew well, feed them even better and compensate them as needed. We understand the value of a satisfied cast and crew, as well as having the equipment needed to increase production value and $15,000 was just right. We set up a fund rasing campaign through Kickstarter which, after a month of relentless marketing, was "unsuccessful". Filled with a desire to move forward, we proceeded to contact each backer and asked them if they would still consider joining our filmmaking adventure. They said yes and the checks came in. After adjusting our budget and with the dedication of our cast and crew, we had the money needed to start production. We shot the film in 3 weekends for a total of $800 and had just enough left over to cover marketing and festival costs. With our desire to make this film and the support of our community, HORSE came to life. We are proud of the film and consider it a great accomplishment and worthy of being turned into a feature. The adventure continues...</p>
		</div>
		<div class="span4">
			<h2>Links</h2>
			<ul class="unstyled widget">
				<li>
					<a href="http://horsethemovie.com" target="_blank">HorseTheMovie.com</a>
				</li>
			</ul>			
			<h2>Credits</h2>
			<ul class="credits unstyled widget">
				<li><strong>Writer/Director/DP/Editor</strong> - Seth Hall</li>
				<li><strong>Producer</strong> - Elizabeth Hall</li>
				<br>
				<li><strong>Young Seth</strong> - Zack Farrand</li>
				<li><strong>Roy</strong> - Michael La Ferla</li>
				<li><strong>Seth</strong> - Jason Blackman</li>
				<li><strong>Sammy</strong> - Josh Fewell</li>
				<li><strong>Sarah</strong> - Tina Shortt</li>
				<li><strong>Conroy</strong> - Billy Ingram</li>
			</ul>
			<h2>Poster</h2>
			<a href="/img/horse-poster-big.jpg" rel="lightbox" title="HORSE Movie Poster">
			<img src="/img/horse-poster-small.jpg">
			<div>Click for larger image</div>
			</a>
			<h2>Photos</h2>
			<div class="carousel">
			  <!-- Carousel items -->
			  <div class="carousel-inner">
			   	<div class="item">
                <img src="/img/horse-slide6.jpg" alt="">
              </div>
              <div class="item">
                <img src="/img/horse-slide1.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Michael & Zack</h4>
                </div>
              </div>
              <div class="item">
                <img src="/img/horse-slide2.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Jason, Tina & Josh</h4>
                </div>
              </div>
              <div class="item">
                <img src="/img/horse-slide3.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Jason & Josh</h4>
                </div>
              </div>
              <div class="item">
                <img src="/img/horse-slide4.jpg" alt="">
              </div>
              <div class="item">
                <img src="/img/horse-slide5.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Jason, Seth & Michael</h4>
                </div>
              </div>
			  </div>
			  <!-- Carousel nav -->
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