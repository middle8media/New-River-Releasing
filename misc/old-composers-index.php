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
			    <a href="#">Composers</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>Composers</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- composers -->
<div class="container">
	<div class="row">
		<div class="span12">
			<ul class="thumbnails">
			  <li class="span4">
			    <div class="thumbnail">
			      <a href="david-wimbish" title="David Wimbish"><img src="/img/wimbish-big.jpg" alt=""></a>
			      <h1>David Wimbish</h1>
			      <p>David Wimbish is a Musician, Producer and Mixing Engineer from North Carolina. He grew up traveling to different countries, enabling a broad view of music culture and sonic textures.</p>
			      <p><a class="btn btn-success" href="david-wimbish">Read More »</a></p>
			    </div>
			  </li>
			  <li class="span4 offset3">
			    <div class="thumbnail">
			      <a href="ed-kerr" title="Ed Kerr"><img src="/img/ed-big.jpg" alt=""></a>
			      <h1>Edd Kerr</h1>
			      <p>Edd Kerr. Multi-instrumentalist. Composer of music. Writer of songs. Producer of records.</p>
			      <p><a class="btn btn-success" href="ed-kerr">Read More »</a></p>
			    </div>
			  </li>  		  
			</ul>
		</div>
	</div>
</div>
<!-- end composers -->



<!-- footer -->
<?php include '../footer.php'; ?>
<!-- end footer -->


<!-- javascript -->

	<script>
		$('li').click(function(){
			$('li.active').removeClass('active');
				$(this).addClass('active');
	});
	</script>

	<script>
		$('.dropdown-toggle').dropdown()
		$(".collapse").collapse()
	</script>

<!-- end javascript -->


</body>