	<meta charset="utf-8" />
	<title>New River Releasing</title>

	<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="/css/style.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Average' rel='stylesheet' type='text/css'>

	<!-- <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" /> -->

	<html xmlns:fb="http://ogp.me/ns/fb#">
	

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>	
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/jquery.easing.js"></script>

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-29992697-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

	<script>
		$('.typeahead').typeahead();
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
		   $('a[href*=#]').bind('click', function(e) {
		        e.preventDefault(); //prevent the "normal" behaviour which would be a "hard" jump

		        var target = $(this).attr("href"); //Get the target

		        // perform animated scrolling by getting top-position of target-element and set it as scroll target
		        $('html, body').stop().animate({ scrollTop: $(target).offset().top }, 2000, 'easeOutExpo', function() {

		             location.hash = target;  //attach the hash (#jumptarget) to the pageurl
		        });

		        return false;
		   });
		});
	</script>


	<script type="text/javascript">var _kiq = _kiq || [];</script>
	<script type="text/javascript" src="//s3.amazonaws.com/ki.js/31984/6dT.js" async="true"></script>

	<script type="text/javascript">
	$(document).ready(function() {

	/* This is basic - uses default settings */
	
	$("a#single_image").fancybox();
	
	/* Using custom settings */
	
	$("a#inline").fancybox({
		'hideOnContentClick': true
	});

	/* Apply fancybox to multiple items */
	
	$("a.group").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
	
});

	</script>

<!-- start Mixpanel -->
<script type="text/javascript">(function(d,c){var a,b,g,e;a=d.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===d.location.protocol?"https:":"http:")+'//api.mixpanel.com/site_media/js/api/mixpanel.2.js';b=d.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);c._i=[];c.init=function(a,d,f){var b=c;"undefined"!==typeof f?b=c[f]=[]:f="mixpanel";g="disable track track_pageview track_links track_forms register register_once unregister identify name_tag set_config".split(" ");
for(e=0;e<g.length;e++)(function(a){b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,0)))}})(g[e]);c._i.push([a,d,f])};window.mixpanel=c})(document,[]);
mixpanel.init("35fa0815496b173e460a367f32f4febe");
</script>
<!-- end Mixpanel -->



