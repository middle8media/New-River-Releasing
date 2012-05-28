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
			    <a href="#">Web Series</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>Web Series</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- web series -->
<div class="container">
	<div class="row">
		<div class="span12">
			<ul class="thumbnails">
				<li class="span4">
				    <div class="thumbnails2 wrapper">
						<a href="#"><img src="/img/hive.jpg" alt=""></a>
					<div class="ribbon-wrapper">
       					<div class="ribbon-green">In Production</div>
				    </div>
				    <h1>The Hive</h1>
						<p>A ground-breaking web drama from Highway 29 Motion Pictures tells the story of five girls who share a mysterious old house.<br><br> <strong><em>COMING SOON</em></strong> to a browser near you!!</p>
					</div>​
				</li>		  
			</ul>
		</div>
	</div>
</div>
<!-- end web series -->


<!-- footer -->
<?php include '../footer.php'; ?>
<!-- end footer -->



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

</body>