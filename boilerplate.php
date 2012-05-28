<!doctype html>
<html>
<head>
<?php include 'head.php'; ?>
</head>

<body>
<!-- navigation -->
<?php include 'nav.php'; ?>
<!-- end navigation -->


<!-- header -->
<?php include 'header.php'; ?>
<!-- end header -->


<!-- page title -->

<!-- with button -->
<div class="container">
	<div class="row">
		<div class="span10 page-title">
			<span>Page Title</span>
		</div>
		<div class="btn-group span2">
		  <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#">
		    Select a Film
		    <span class="caret"></span>
		  </a>
		  <ul class="dropdown-menu">
		    <a href="/lakeoffire.html"><i class="icon-film"></i> Lake of Fire</a>
		    <a href="/biggreenlove.html"><i class="icon-film"></i> Big Green Love</a>
		    <a href="/horse.html"><i class="icon-film"></i> HORSE</a>
		  </ul>
		</div>
	</div>
</div>


<!-- breadcrumbs -->
<div class="container">
	<div class="row">
		<div class="span9 page-title">
			<span>The Hive</span>
		</div>
		<div class="span3">
			<ul class="breadcrumb">
			  <li>
			    <a href="/web-series">Web Series</a> <span class="divider">/</span>
			  </li>
			  <li class="active">
			    <a href="#">The Hive</a>
			  </li>
			</ul>
		</div>
	</div>
</div>
<!-- end breadcrumbs -->

<!-- end page title -->


<!-- pagination -->
<div class="container">
	<div class="row">
		<div class="span12">
			<div class="pagination pagination-right">
			  <ul>
			    <li><a href="#">Prev</a></li>
			    <li class="active">
			      <a href="#">1</a>
			    </li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">Next</a></li>
			  </ul>
			</div>
		</div>
	</div>
</div>	
<!-- end pagination -->


<!-- bottom border -->
<div class="container">
	<div class="row">
		<div class="span12 bottom-border">
		</div>
	</div>
</div>
<!-- end bottom border -->


<!-- twitter feed -->
<div class="container">
	<div class="row">
		<div class="span4">
			<h2>Latest Tweets</h2>
			<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
			new TWTR.Widget({
			  version: 2,
			  type: 'profile',
			  rpp: 5,
			  interval: 30000,
			  width: 'auto',
			  height: 'auto',
			  theme: {
			    shell: {
			      background: '#68747e',
			      color: '#ffffff'
			    },
			    tweets: {
			      background: '#ffffff',
			      color: '#222222',
			      links: '#476d99',
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
	</div>
</div>
<!-- end twitter feed -->



<!-- footer -->
<?php include 'footer.php'; ?>
<!-- end footer -->


<!-- javascript -->
	<script>
		$('.dropdown-toggle').dropdown()
		$(".collapse").collapse()
	</script>

	<script>
		$('li').click(function(){
			$('li.active').removeClass('active');
				$(this).addClass('active');
	});
	</script>

	<script type="text/javascript">
	  $(window).load(function() {
	    $('.flexslider').flexslider();
	  });
	</script>
<!-- end javascript -->


</body>