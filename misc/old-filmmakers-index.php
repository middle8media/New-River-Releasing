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
			    <a href="#">Filmmakers</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>Filmmakers</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- filmmakers -->
<div class="container">
	<div class="row">
		<div class="span12">
			<ul class="thumbnails">
			  <li class="span4">
			    <div class="thumbnail">
			      <a href="les-butchart" title="Les Butchart"><img src="/img/les-big.jpg" alt=""></a>
			      <h1>Les Butchart</h1>
			      <p>Les Butchart is the co-founder of Highway 29 Motion Pictures, co-founder of New River Releasing, and founder of Fugitive Poets Press.</p>
			      <p><a class="btn btn-success" href="les-butchart">Read More »</a></p>
			    </div>
			  </li>
			  <li class="span4">
			    <div class="thumbnail">
			      <a href="seth-hall" title="Seth Hall"><img src="/img/seth-big.jpg" alt=""></a>
			      <h1>Seth Hall</h1>
			      <p>Seth Hall is a writer, producer & director of independent film. Seth is also a web designer and developer. Sometimes all at the same time, other times not.</p>
			      <p><a class="btn btn-success" href="seth-hall">Read More »</a></p>
			    </div>
			  </li>
			  <li class="span4">
			    <div class="thumbnail">
			      <a href="lucas-butchart" title="Lucas Butchart"><img src="/img/lucas-big.jpg" alt=""></a>
			      <h1>Lucas Butchart</h1>
			      <p>Lucas Butchart is a writer, producer & photographer. He recently wrote the script for Saints at the River, based on the novel by Ron Rash.</p>
			      <p><a class="btn btn-success" href="lucas-butchart">Read More »</a></p>
			    </div>
			  </li>
			  <li class="span4">
			    <div class="thumbnail">
			      <a href="slade-blackburn" title="Lucas Butchart"><img src="/img/slade-big.jpg" alt=""></a>
			      <h1>Slade Blackburn</h1>
			      <p>Slade Blackburn is... well, just read more and find out.<br><br><em>hint:</em> He is awesome.</p>
			      <p><a class="btn btn-success" href="slade-blackburn">Read More »</a></p>
			    </div>
			  </li>		  		  		  
			</ul>
		</div>
	</div>
</div>
<!-- end filmmakers -->


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